<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Ajax\ContactController;

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

Route::post('/sendmail', [ContactController::class, 'send']);

//Route::post('/sendmail', function () {
////    dd('OK');
//    return 'OK';
//
//    return view('welcome');
//});

//Route::post('/sendmail', 'Ajax\ContactController@send');

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin', [MainController::class, 'index']);

Route::get('/admin/orders-list', [MainController::class, 'orders']);

//Route::get('/rock', 'Admin/MainController@rock');


//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//    Route::get('/', 'MainController@index')->name('admin.index');
//});
