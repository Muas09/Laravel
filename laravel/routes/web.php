<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/welcom', function () {
    return view('welcome');
});

Route::get('/mua', function () {
    return ' chào mừng các bạn đã đến với PNV';
});

Route::get('/chao',[App\Http\controllers\ExController:: class,'hello']);

Route::get('/tinhtong', [App\Http\controllers\TongController:: class,'tinhtong']);
Route::get('/tinhtong', function () {return view('tinhtong');});
Route::post('/tinhtong', function () {
    $a = request('a');
    $b = request('b');
    $tong = $a + $b;
       return view('tinhtong', ['tong' => $tong]);
});


Route::get('/area', function () {
    return view('Shape');
});
Route::post('/area', [AreaController::class, 'Area']);

Route::get('create',[App\Http\controllers\UserController:: class,'create']);
Route::get('create', 'UserController@create')->name('users.create');


Route::get('/signup',[RegisterController::class,'showRegistrationForm']);
Route::post('/signup',[RegisterController::class,'RegisterAction']);


Route::get('/miu', function () {
    return view('welcome');
});