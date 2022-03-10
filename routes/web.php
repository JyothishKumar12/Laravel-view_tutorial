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

Route::get('home/',function(){
    return view('home');
});

// Route::get('home/','home');


Route::get('admin/',function(){
    return view('admin.profile');
});


Route::get('user',function(){

    return view('user.users',['name'=>'Tony stark']);
});


Route::get('cart/{cart_d}',function($id){
    return view('user.cart',['id'=>$id]);
});