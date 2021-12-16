<?php

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
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome';
});
Route::get('/aaaaa/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/bbbbb/{id?}', function () {
    return  'welcome';
})-> name('b');


Route::get('/admin/{id?}', function () {
    return  'welcome admin';
})-> name('admin');