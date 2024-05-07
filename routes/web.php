<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('coming-soon');
// });

require __DIR__ . '/landing-page.php';


// Route::view('/','index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
