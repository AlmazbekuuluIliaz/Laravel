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
    return view('layouts/layout');
});
Route::get('/about', function () {
    return view('main/about');
});
Route::get('/hello', function () {
    return view('main/hello');
});
Route::get('/contact', function () {
    $contact = [
        'name' => 'Политех',
        'address' => 'Пряники',
        'phone' => '8 (495) 433-23-23',
        'email' => '@poytech.ru',
    ];
    return view('main/contact', ['contact' => $contact]);
});