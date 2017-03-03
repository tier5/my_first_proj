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

Route::get('/proj', function () {
    return view('layout.index1');
});
Route::get('/reg', function () {
    return view('layout.registration');
})->name('reg');
 // Route::get('/', 'PagesController@getIndex2');
   Route::get('/create','MemberController@
   create'); 

  Route::post('/store','MemberController@store');
   Route::get('/show','MemberController@show');

   Route::get('/log', function () {
    return view('layout.login');
})->name('log');

   Route::get('/show', function () {
    return view('layout.show');
})->name('show');


     Route::get('/auth','AuthenticateController@auth'); 

        Route::get('/showlog', function () {
    return view('layout.showlog');
})->name('showlog');
   




  
    
 
