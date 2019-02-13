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

Route::get('/about',function(){
    return view('about');
});
Route::get('/doubt',function(){
    return view('doubt');
});
Route::get('/contactUs',function(){
    return view('contactUs');
});
Route::get('/form','fetchController@index');
Route::get('/add_email','emailController@index');
Route::post('/store','emailController@store');
Route::get('/track/{email}','trackController@store');
Route::get('/try','mailController@myfunc');


Route::get('/admin', 'adminController@index');




Route::post('/create_campaign/send','mailController@send');

Route::get('/activate-account/{token}','GuestController@verify')->name('activate-account');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


