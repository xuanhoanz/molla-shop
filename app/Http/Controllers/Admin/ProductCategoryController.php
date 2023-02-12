<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Scope;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategory = ProductCategory::query()->search()
            ->paginate(10, ['*'], 'page', null);
        return view('admin.products-category.index', compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productCategory = new ProductCategory;
        $productCategory->id = $request->id;
        $productCategory->name = $request->name;
        $productCategory->description = $request->description;
        $productCategory->status = $request->status;

        $productCategory->save();
        return redirect()->action([ProductCategoryController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        return view('admin.products-category.update', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productCategory = ProductCategory::find($id);
        $productCategory->id = $request->id;
        $productCategory->name = $request->name;
        $productCategory->description = $request->description;
        $productCategory->status = $request->status;

        $productCategory->save();
        return redirect()->action([ProductCategoryController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCategory = ProductCategory::find($id);
        if ($productCategory->products->count() > 0) {
            return redirect()->action([ProductCategoryController::class, 'index'])->with('Khong xoa duoc');

        } else {
            $productCategory->delete();
            return redirect()->action([ProductCategoryController::class, 'index'])->with('Xoa thanh cong');
        }
    }
}
