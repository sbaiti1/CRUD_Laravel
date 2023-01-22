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
    return view('welcome');
});

Route::view('newUser' , 'newUser');
Route::get('edit/{id}' , 'App\Http\Controllers\C1@findUser');
Route::get('delete/{id}' ,function ($id) {
    return view('delete' , ['id'=>$id]);
} );

Route::get('/data' , 'App\Http\Controllers\C1@getdata');
Route::post('/data' , 'App\Http\Controllers\C1@newUser');
Route::put('/data' , 'App\Http\Controllers\C1@editUser');
Route::delete('/data' ,'App\Http\Controllers\C1@deleteUser' );