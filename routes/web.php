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
    return view('frontend.home');
});
Route::view('about','frontend.about')->name('about');
Route::view('facilities','frontend.facilities')->name('facilities');
Route::view('admission','frontend.admission')->name('admission');
Route::view('contact','frontend.contact')->name('contact');
 Route::get('portal', function () {
     return view('frontend.portal');
 });
Route::get('events','FrontendController@events')->name('events');
Route::get('blog','FrontendController@blog')->name('blog');
Route::get('blogpost','FrontendController@blogpost')->name('blogpost');
Route::get('back', function () {
    return view('backend.layouts.app');
});
