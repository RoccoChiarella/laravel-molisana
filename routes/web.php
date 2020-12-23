<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('homepage');

Route::get('/products' , function () {
    $array_pasta = config('pasta');
    $collection_pasta = collect($array_pasta);
    $pasta_lunga = $collection_pasta->where('tipo', 'lunga');
    $pasta_corta = $collection_pasta->where('tipo', 'corta');
    $pasta_cortissima = $collection_pasta->where('tipo', 'cortissima');
    $data = [
        'pasta' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];
    return view('products', $data);
})->name('pageProducts');

Route::get('/news' , function () {
    return view('news');
})->name('pageNews');

Route::get('/products-details/{id}', function($id) {
    $array_pasta = config('pasta');
    $data = [
        'pasta' => $array_pasta[$id]
    ];
    return view('detail', $data);
})->name('pageDetail');
