<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class ProductRepository
{
    /**
     * Get Products with pagination
     * @var Product
     */
    public function paginate($perPage = 15)
    {
        return Product::with('Category')->paginate($perPage);
    }

    /**
     * Get all Products
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Product::with('Category')->get();
    }

    /**
     * Create a new Product.
     * @param $data
     * @return Product
     */
    public function create($data)
    {
        return Product::create($data);
    }

    /**
     * Delete a Product
     * @param $id : Product id
     * @return Product|Product[]|bool|\LaravelIdea\Helper\App\Models\_IH_Product_C|null
     */
    public function delete($id)
    {
        $Product = Product::find($id);
        if ($Product) {
            $Product->delete();
            return true;
        }
        return $Product;
    }

    /**
     * Update the specified resource in storage.
     * @param $id
     * @param $data
     * @return Product|Product[]|false|\LaravelIdea\Helper\App\Models\_IH_Product_C|null
     */
    public function update($id, $data)
    {
        $Product = Product::find($id);
        if ($Product->update($data)) {
            return $Product;
        } else {
            return false;
        }
    }

    /**
     * Find Product by id
     * @param $id
     * @return Product|Product[]|\LaravelIdea\Helper\App\Models\_IH_Product_C|null
     */
    public function find($id)
    {
        return Product::find($id);
    }

    /**
     * Force Delete Product
     * @param $id
     * @return bool|mixed|null
     */
    public function forceDelete($id)
    {
        return Product::where('id', $id)->withTrashed()->forceDelete();
    }

    /**
     * Get all Products with category
     * @param $category_id
     * @param $perPage = 15
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function searchProducts($keyword = '', $category_id = 0, $perPage = 15)
    {
        $ProductQuery = Product::query();

        if (isset($category_id) && $category_id > 0) {
            $ProductQuery->where('Product_category_id', $category_id);
        }
        if (isset($keyword) && $keyword != '') {
            $ProductQuery->where('name', 'like', '%' . $keyword . '%');
        }
        return $ProductQuery->with('Category')->paginate($perPage);
    }

    /**
     * Get all Products with category
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
    public function findOrFail($id) {
        return Product::findOrFail($id);
    }

    /**
     * Get Products with attributes
     * @param $attributes : array
     * @return \LaravelIdea\Helper\App\Models\_IH_Product_C[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getByAttributes($attributes) {
        $conditions = '';
        $countAttributes = count($attributes);
        $index = 0;
        foreach($attributes as $key => $value) {
            $conditions .= $key . ' = ' . $value;
            if ($countAttributes > 1 && $index < $countAttributes - 1) {
                $conditions .= ' AND ';
            }
            $index++;
        }
        return Product::whereRaw($conditions)->get();
    }

    /**
     * Get count of Products
     * @return int
     */
    public function count() {
        return Product::count();
    }

    public function getByCategories($id, $perPage) {
        $productQuery = Product::query();
        $productQuery->where('category_id',$id)->get();
        return $productQuery->paginate($perPage);
    }


}
