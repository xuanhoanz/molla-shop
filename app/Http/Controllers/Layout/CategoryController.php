<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRes;
    protected $itemRes;
    public const LIST_PER_PAGE = 20;

    public function __construct(CategoryRepository $categoryRes, ProductRepository $itemRes)
    {
        $this->categoryRes = $categoryRes;
        $this->itemRes = $itemRes;
    }

    public function index()
    {
        $perPage = self::LIST_PER_PAGE;
        $products = $this->itemRes->paginate(12);
        $total = $this->itemRes->count();
        $categories = $this->categoryRes->all();

        return view('frontend.category.index', array(
            'products' => $products,
            'total' => $total,
            'categories' => $categories,
            'perPage' => $perPage,
            'filter' => '',
        ));
    }

    public function show($id)
    {
        $perPage = self::LIST_PER_PAGE;
        $category = $this->categoryRes->find($id);
        $products = $this->itemRes->getByCategories($id, $perPage);
        $total = $this->itemRes->count();
        $categories = $this->categoryRes->all();
        $producCategory = $this->categoryRes->getCategory();

        return view('frontend.category.show-product',array(
            'products' => $products,
            'total' => $total,
            'perPage' => $perPage,
            'categories' => $categories,
            'filter' => '',
            'currentCategory' => $category,
            'producCategory' => $producCategory,
        ));
    }

}
