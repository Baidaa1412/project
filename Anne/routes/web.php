<?php
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Review;

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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/admindashboard', function () {
    return view('Admin.home');
});

Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});


Route::get('/products', function () {
    return view('home.products');
});
Route::get('/pie', function () {
    return view('Admin.piechart');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get ('redirect',[HomeController::class,'redirect']);
Route::get ('view_category',[CategoryController::class,'index']);
Route::post ('view_category',[CategoryController::class,'store']);
Route::post ('view_category',[CategoryController::class,'store']);
Route::get ('product',[CategoryController::class,'showcategor']);
Route::post ('view_category/{id}',[CategoryController::class,'update'])->name('updateCategory');
Route::delete('view_category/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');
Route::delete('view_category', [CategoryController::class, 'deleteItems'])->name('deleteItems');
Route::get ('product',[ProductController::class,'index']);
Route::post ('product',[ProductController::class,'store']);
Route::get ('product',[ProductController::class,'showcategor']);
Route::post ('product/{id}',[ProductController::class,'update'])->name('updateProduct');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('deleteProduct');
Route::get ('orders',[OrderController::class,'index']);
Route::post ('orders/{id}',[OrderController::class,'update'])->name('updateorder');
Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('deleteorder');
Route::get ('users',[UserController::class,'index']);
Route::post ('users/{id}',[UserController::class,'update'])->name('updateuser');
// Route::get ('products',[ProductController::class,'show']);
Route::get ('nav',[CategoryController::class,'show']);
Route::get ('footer',[CategoryController::class,'show2']);
Route::get ('admindashboard',[AdminController::class,'index'])->name('admindashboard');
Route::get ('search',[AdminController::class,'search']);
Route::get('productcategory/{category_name}',[CategoryController::class,'showProducts']);
Route::get('details/{id}',[ProductController::class,'Pagedetail'])->name('pagedetail');
Route::post('details/{id}',[ReviewController::class,'store'])->name('reviews.store');
Route::post('cart/{id}',[CartController::class,'addtocart'])->name('cart');
