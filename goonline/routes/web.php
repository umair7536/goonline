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
    return view('index');
});

Route::get('/how-it-works',function(){
    return view('how-it-works');
});

Route::get('/our-experts',function(){
    return view('our-experts');
});

Route::get('/',function(){
    return view('our-experts');
});

Route::get('/our-customers',function(){
    return view('our-customers');
});
Route::get('/pricing',function(){
    return view('pricing');
});
Route::get('/become-an-expert',function(){
    return view('become-an-expert');
});



