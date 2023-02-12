<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Layout\HomeController;
use App\Http\Controllers\Layout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Frontend
Route::get('/', [HomeController::class,'index']);

//Route::get('/products', [ProductController::class,'index']);
//
Route::get('/single-product/{id}', [Layout\ProductController::class,'show']);

Route::get('/posts', [Layout\PostsController::class,'index']);

Route::get('/posts-detail/{id}', [Layout\PostsController::class, 'show']);

Route::group(['prefix'=>'category'], function () {
    Route::get('/', [Layout\CategoryController::class, 'index'])->name('category.index');
    Route::get('/{id}', [Layout\CategoryController::class, 'show'])->name('category.show');
});

Route::get('/about-us', function () {
    return view('frontend.about-us.about-us');
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us.contact-us');
});
Route::post('contact-us/store', [Layout\ContactController::class,'store']);
Route::get('contact-us/completed', [Layout\ContactController::class,'index']);
Route::get('/posts_detail', function () {
    return view('frontend.posts_detail.posts_detail');
});
Route::get('/wishlist', function () {
    return view('frontend.wishlist.wishlist');
});
Route::get('/checkout', function () {
    return view('frontend.checkout.checkout');
});
Route::post('checkout/store', [Layout\CheckoutController::class,'store']);


Route::get('/Add-Cart/{id}', [Layout\CartController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [Layout\CartController::class, 'DeleteItemCart']);

Route::get('/List-Carts', [Layout\CartController::class, 'ViewListCart']);

Route::get('/Delete-Item-List-Cart/{id}', [Layout\CartController::class, 'DeleteListItemCart']);

Route::get('/Save-Item-List-Cart/{id}/{quanty}', [Layout\CartController::class, 'SaveListItemCart']);



// Backend

Auth::routes();

Route::group(['prefix'=>'/admin'], function (){
    Route::get('/index', [Admin\DashboardController::class,'index'])->middleware('auth');

    Route::group(['prefix'=>'/news'], function () {
        Route::get('/create', [Admin\NewsController::class, 'create'])->name('news.create');
        Route::post('/store', [Admin\NewsController::class, 'store'])->name('news.store');
        Route::get('/', [Admin\NewsController::class, 'index'])->name('news.index');
        Route::get('/{id}', [Admin\NewsController::class, 'show'])->name('news.show');
        Route::get('/edit/{id}', [Admin\NewsController::class, 'edit'])->name('news.edit');
        Route::PATCH('/update/{id}', [Admin\NewsController::class, 'update'])->name('news.update');
        Route::DELETE('/delete/{id}', [Admin\NewsController::class, 'destroy'])->name('news.delete');
    });

    Route::group(['prefix'=>'/posts'], function (){
        Route::get('/create', [Admin\PostsController::class,'create'])->name('posts.create');
        Route::post('/store', [Admin\PostsController::class,'store'])->name('posts.store');
        Route::get('/', [Admin\PostsController::class,'index'])->name('posts.index');
        Route::get('/{id}', [Admin\PostsController::class, 'show'])->name('posts.show');
        Route::get('/edit/{id}', [Admin\PostsController::class, 'edit'])->name('posts.edit');
        Route::PATCH('/update/{id}', [Admin\PostsController::class,'update'])->name('posts.update');
        Route::DELETE('/delete/{id}', [Admin\PostsController::class,'destroy'])->name('posts.delete');
    });

    Route::group(['prefix'=>'/posts-category'], function (){
        Route::get('/create', [Admin\PostsCategoryController::class,'create'])->name('posts-category.create');
        Route::post('/store', [Admin\PostsCategoryController::class,'store'])->name('posts-category.store');
        Route::get('/', [Admin\PostsCategoryController::class,'index'])->name('posts-category.index');
        Route::get('/edit/{id}', [Admin\PostsCategoryController::class, 'edit'])->name('posts-category.edit');
        Route::PATCH('/update/{id}', [Admin\PostsCategoryController::class,'update'])->name('posts-category.update');
        Route::DELETE('/delete/{id}', [Admin\PostsCategoryController::class,'destroy'])->name('posts-category.delete');

    });

    Route::group(['prefix'=>'/product-category'], function (){
        Route::get('/create', [Admin\ProductCategoryController::class,'create'])->name('product-category.create');
        Route::post('/store', [Admin\ProductCategoryController::class,'store'])->name('product-category.store');
        Route::get('/', [Admin\ProductCategoryController::class,'index'])->name('product-category.index');
        Route::get('/edit/{id}', [Admin\ProductCategoryController::class, 'edit'])->name('product-category.edit');
        Route::PATCH('/update/{id}', [Admin\ProductCategoryController::class,'update'])->name('product-category.update');
        Route::DELETE('/delete/{id}', [Admin\ProductCategoryController::class,'destroy'])->name('product-category.delete');
    });

    Route::group(['prefix'=>'/products'], function (){
        Route::get('/create', [Admin\ProductController::class,'create'])->name('products.create');
        Route::post('/store', [Admin\ProductController::class,'store'])->name('products.store');
        Route::get('/', [Admin\ProductController::class,'index'])->name('products.index');
        Route::get('/{id}', [Admin\ProductController::class, 'show'])->name('products.show');
        Route::get('/edit/{id}', [Admin\ProductController::class, 'edit'])->name('products.edit');
        Route::PATCH('/update/{id}', [Admin\ProductController::class,'update'])->name('products.update');
        Route::DELETE('/delete/{id}', [Admin\ProductController::class,'destroy'])->name('products.destroy');
    });

    Route::group(['prefix'=>'/banners'], function (){
        Route::get('/create', [Admin\BannerController::class,'create'])->name('banners.create');
        Route::post('/store', [Admin\BannerController::class,'store'])->name('banners.store');
        Route::get('/', [Admin\BannerController::class,'index'])->name('banners.index');
        Route::get('/edit/{id}', [Admin\BannerController::class, 'edit'])->name('banners.edit');
        Route::PATCH('/update/{id}', [Admin\BannerController::class,'update'])->name('banners.update');
        Route::DELETE('/delete/{id}', [Admin\BannerController::class,'destroy'])->name('banners.destroy');
    });

    Route::group(['prefix'=>'/bills'], function (){
        Route::get('/create', [Admin\BillController::class,'create'])->name('bills.create');
        Route::post('/store', [Admin\BillController::class,'store'])->name('bills.store');
        Route::get('/', [Admin\BillController::class,'index'])->name('bills.index');
        Route::get('/edit/{id}', [Admin\BillController::class, 'edit'])->name('bills.edit');
        Route::get('/{id}', [Admin\BillController::class, 'show'])->name('bills.show');
        Route::PATCH('/update/{id}', [Admin\BillController::class,'update'])->name('bills.update');
        Route::DELETE('/delete/{id}', [Admin\BillController::class,'destroy'])->name('bills.delete');
    });

    Route::group(['prefix'=>'/customers'], function (){
        Route::get('/create', [Admin\CustomerController::class,'create'])->name('customers.create');
        Route::post('/store', [Admin\CustomerController::class,'store'])->name('customers.store');
        Route::get('/', [Admin\CustomerController::class,'index'])->name('customers.index');
        Route::get('/edit/{id}', [Admin\CustomerController::class, 'edit'])->name('customers.edit');
        Route::PATCH('/update/{id}', [Admin\CustomerController::class,'update'])->name('customers.update');
        Route::DELETE('/delete/{id}', [Admin\CustomerController::class,'destroy'])->name('contacts.delete');
    });

    Route::group(['prefix'=>'/users'], function (){
        Route::get('/create', [Admin\UserController::class,'create'])->name('users.create');
        Route::post('/store', [Admin\UserController::class,'store'])->name('users.store');
        Route::get('/', [Admin\UserController::class,'index'])->name('users.index');
        Route::get('/edit/{id}', [Admin\UserController::class, 'edit'])->name('users.edit');
        Route::PATCH('/update/{id}', [Admin\UserController::class,'update'])->name('users.update');
        Route::DELETE('/delete/{id}', [Admin\UserController::class,'destroy'])->name('users.delete');
    });

    Route::group(['prefix'=>'/contacts'], function (){
        Route::get('/create', [Admin\ContactController::class,'create'])->name('contacts.create');
        Route::post('/store', [Admin\ContactController::class,'store'])->name('contacts.store');
        Route::get('/', [Admin\ContactController::class,'index'])->name('contacts.index');
        Route::get('/edit/{id}', [Admin\ContactController::class, 'edit'])->name('contacts.edit');
        Route::PATCH('/update/{id}', [Admin\ContactController::class,'update'])->name('contacts.update');
        Route::DELETE('/delete/{id}', [Admin\ContactController::class,'destroy'])->name('contacts.delete');
    });
});


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');


