<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;


class ProductController extends Controller
{
    protected $categoryRes;
    protected $productRes;
    public const LIST_PER_PAGE = 20;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(CategoryRepository $categoryRes, ProductRepository $productRes)
    {
        $this->categoryRes = $categoryRes;
        $this->productRes = $productRes;
    }

    public function index()
    {
        $categories = $this->categoryRes->all();
        $total = $this->productRes->count();
        $products = Product::query()->search()->paginate(12,['*'], 'page', null);
        return view('frontend.product.products', array(
            'products' => $products,
            'total' => $total,
            'categories' => $categories,
            'filter' => '',
        ));
    }
    public function newproducts()
    {
//        $products = DB::table('products')->select('*');
//        $products = $products->get();
//        return view('frontend.home.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show(int $id)
    {
        $perPage = self::LIST_PER_PAGE;
        $product = $this->productRes->find($id);
        $total = $this->productRes->count();
        $categories = $this->categoryRes->all();
        $listProduct = $this->productRes->all();

        return view('frontend.single-product.index', array(
            'product' => $product,
            'listProduct' => $listProduct,
            'total' => $total,
            'perPage' => $perPage,
            'categories' => $categories,
            'filter' => '',
          ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('frontend.single-product.single-product', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->category_id = $request->id;
        $products->name = $request->name;
        $products->information = $request->information;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->status = $request->status;

        $products->save();
        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);

        $products->delete();
        return redirect()->action([ProductController::class, 'index']);
    }

    public function productFilter(Request $request){
        $products = Product::query()
            ->name($request);
        return $products->get();
    }
}
