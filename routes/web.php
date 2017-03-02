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



  
    
 
