<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Models\tb_Categorie;
use App\Models\tb_FromTheBlog;
use App\Models\tb_FeaturedProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Product;

// route menuju halaman utama / home
Route::get('/', [HomeController::class, 'index']);



// route menuju halaman setiap kategori
Route::get('/category/{category:slug}', function (Categorie $category) {
    return view('layouts.category', [
        'title' => $category->judulCategory,
        'oneCategory' => $category->Products,
        'onePromo' => $category->ProductsPromo
    ]);
});



// route menuju halaman setiap product
Route::get('/product/{product:slug}', function (Product $product) {
    return view('layouts.products', [
        'title' => $product->judulProduct,
        'oneProduct' => $product
    ]);
});



// route menuju halaman setiap blog
Route::get('/blog/{blog:slug}', function (Blog $blog) {
    return view('layouts.blog', [
        'title' => $blog->nameBlog,
        'oneBlog'  => $blog,
        'listCategory' => $blog->AllCategory
    ]);
});



// route menuju halaman setiap blog
Route::get('/contact', function () {
    return view('layouts.contact', [
        'title' => 'Contact',
    ]);
});



// route menuju halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);



// untuk log-out
Route::post('/logout', [LoginController::class, 'logout']);



// route menuju halaman registrasi
Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);



// route menuju halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



//===================================================================================================
// route menuju halaman banner untuk membuat otomatis slug
Route::get('/dashboard/banner/checkSlug', [BannerController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman banner
Route::resource('/dashboard/banner', BannerController::class)->middleware('auth')->middleware('admin');
//===================================================================================================



//===================================================================================================
// route menuju halaman categorie untuk membuat otomatis slug
Route::get('/dashboard/categorie/checkSlug', [CategorieController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman categorie
Route::resource('/dashboard/categorie', CategorieController::class)->middleware('auth')->middleware('admin');
//===================================================================================================



//===================================================================================================
// route menuju halaman product untuk membuat otomatis slug
Route::get('/dashboard/product/checkSlug', [ProductController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman product
Route::resource('/dashboard/product', ProductController::class)->middleware('auth')->middleware('admin');
//===================================================================================================



//===================================================================================================
// route menuju halaman product untuk membuat otomatis slug
Route::get('/dashboard/blog/checkSlug', [BlogController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman blog
Route::resource('/dashboard/blog', BlogController::class)->middleware('auth')->middleware('admin');
//===================================================================================================



//===================================================================================================
// route menuju halaman promo untuk membuat otomatis slug
Route::get('/dashboard/promo/checkSlug', [PromoController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman promo
Route::resource('/dashboard/promo', PromoController::class)->middleware('auth')->middleware('admin');
//===================================================================================================



//===================================================================================================
// route menuju halaman jumbotron untuk membuat otomatis slug
Route::get('/dashboard/jumbotron/checkSlug', [JumbotronController::class, 'checkSlug'])->middleware('auth');

// route menuju halaman jumbotron
Route::resource('/dashboard/jumbotron', JumbotronController::class)->middleware('auth')->middleware('admin');
//===================================================================================================




//===================================================================================================
// route menuju halaman user
Route::resource('/dashboard/user', UserController::class)->middleware('auth');
//===================================================================================================
