<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/hakkimizda', function () {
    return view('about');
});


Route::get('/sepet', [ProductController::class, 'cartObjects'])->name('cart');


Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/sepet', [ProductController::class, 'addToCart'])->name('addToCart');


Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/tum-urunler', [ProductController::class, 'tumUrunler'])->name('products.index');
Route::get('/populer-urunler', [ProductController::class, 'populerUrunler'])->name('populer');
Route::get('/yeni-urunler', [ProductController::class, 'yeniUrunler'])->name('yeniurunler');



Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');
// routes/web.php
Route::get('/createproduct', [ProductController::class, 'create'])->name('product.create');
Route::post('/storeproduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/urunler', [ProductController::class, 'allProducts'])->name('products.allProducts');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/brands/create', [ProductController::class, 'markaCreate'])->name('brands.create');
Route::post('/brands', [ProductController::class, 'markaStore'])->name('brands.store');
Route::get('/types/create', [ProductController::class, 'TipCreate'])->name('types.create');
Route::post('/types', [ProductController::class, 'TipStore'])->name('types.store');
Route::get('/materials/create', [ProductController::class, 'materyalCreate'])->name('materials.create');
Route::post('/materials', [ProductController::class, 'materyalStore'])->name('materials.store');
