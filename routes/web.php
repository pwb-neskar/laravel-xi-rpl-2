<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::view('/template', 'template.master');
Route::view('/test', 'test');
Route::view('/tos', 'tos');


//  diatas sama dengan kodingan dibawah ini.!
// Route::get('/template', function () {
//     return view('template.master');
// });

Route::get('/hello', function() {
    $productId = DB::table('genres')->insertGetId(
        [ 'nama' => 'Acer Aspire 5 Slim Laptop' ]
    );
    return $productId;
})->name('hello');

Route::post('/hai', function() {
    return 'Haaaii';
});
