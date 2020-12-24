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
})-> name('home');

Route::get('/prodotti', function () {
    $pasta = config('pasta');
    $coll_pasta = collect($pasta);
    $lunga = $coll_pasta->where('tipo', 'lunga');
    $corta = $coll_pasta->where('tipo', 'corta');
    $cortissima = $coll_pasta->where('tipo', 'cortissima');

    $data = [
        'pasta' => [
            'lunghe' => $lunga,
            'corte' => $corta,
            'cortissime' => $cortissima
        ]
    ];

    return view('products', $data );
})-> name('products');

Route::get('/news', function () {
    return view('news');
})-> name('news');

Route::get('/prodotto/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');

    if (is_numeric($id) && $id >= 0 && $id < count($pasta)) {
        if ($id == count($pasta)-1) {
            $next = 0;
        } else {
            $next = $id + 1;
        }
        if ($id == 0) {
            $prev = count($pasta)-1;
        } else {
            $prev = $id - 1;
        };
        $prodotto = $pasta[$id];
        $data = [
            'prodotto' => $prodotto,
            'pasta' => $pasta,
            'id' => $id,
            'next' => $next,
            'prev' => $prev
        ];

        return view('details', $data);
    } else {
        abort('404');
    }
})-> name('details');
