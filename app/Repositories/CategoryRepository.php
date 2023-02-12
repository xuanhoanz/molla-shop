<?php

namespace App\Repositories;

use App\Models\ProductCategory;

class CategoryRepository
{
    public function all()
    {
        return ProductCategory::all();
        // dd(Category::all());
    }

    public function create($data)
    {
        $category = ProductCategory::create($data);
        return $category;
    }

    public function delete($id)
    {
        $cate = ProductCategory::find($id);
        if ($cate) {
            $cate->delete();
            return true;
        }
        return $cate;
    }

    public function update($id, $data)
    {
        $cate = ProductCategory::findOrFail($id);
        return $cate->update($data);
    }

    public function find($id)
    {
        return ProductCategory::find($id);
    }

    public function archive()
    {
        $cate = ProductCategory::onlyTrashed()->orderBy('id')->get();
        return $cate;
    }

    public function restore($id)
    {
        $cate = ProductCategory::withTrashed()->find($id)->restore();
        return $cate;
    }

    public function forceDelete($id)
    {
        $cate = ProductCategory::where('id', $id)->withTrashed()->forceDelete();
        return $cate;
    }

    public function getCategory()
    {
        $category = ProductCategory::get(["name", "id"]);
        return $category;
    }
}
