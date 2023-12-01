<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;
use App\Http\Controller\ProdukController;
use App\Http\Controller\ProfileController;


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
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});
Route::get('/produk', function () {
    return view('produk');
});


Route::get('/about', function () {
    return 'Halaman About';
});

Route::get('/about                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::get('/products', function () {
    $products = App\Models\Product::all();
    return view('products.index', ['products' => $products]);
});

Route::get('profile',function(){
    $nama = "Marlina Kirana";
    return view('profile.index', compact('nama'));
});

Route:: Resource(' /profile', App\Http\Controller\ProfileController::class);