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
    $headerLinks = config('headerLinks');
    $cards = config('comics');
    $menuLinks = config('shopMenu');
    $data = [
        'headerLinks' => $headerLinks,
        'cards' => $cards,
        'menuLinks' => $menuLinks,
    ];
    return view('pages.home', $data);
})->name('Home');

Route::get('/product/{id}', function ($id) {
    $headerLinks = config('headerLinks');
    $cards = config('comics');
    $menuLinks = config('shopMenu');
    $data = [
        'headerLinks' => $headerLinks,
        'cards' => $cards,
        'menuLinks' => $menuLinks,
    ];

    if (is_numeric($id) && $id > 0 &&  $id < count($cards)) {
        return view('pages.product', ["comicCard" => $cards[$id]]);
    } else {
        abort(404);
    }
    return view('pages.product', $data);
})->name('Product');

