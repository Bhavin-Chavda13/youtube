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

Route::resource('/Homepage', 'Homepagecontroller');
Route::resource('/Videoplay', 'Videoplaycontroller');


Auth::routes();

Route::group(["middleware"=>'auth'],function(){


Route::redirect('/', 'Youtube');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/Youtube', 'Youtubecontroller');
Route::resource('/categories', 'categoriescontroller');  
Route::resource('/single', 'singlecontroller');
Route::resource('/my_videos', 'my_videoscontroller');
Route::resource('/Likes', 'Likescontroller');
Route::resource('/Comments', 'Commentscontroller');

Route::get('profile','profilecontroller@index')->name('index');
Route::get('profile','profilecontroller@profile')->name('profile');
Route::post('profile','profilecontroller@update_profile')->name('update_profile');

});








// Route::get('file-upload', 'FileUploadController@index');

// Route::post('file-upload/upload', 'FileUploadController@upload')->name('upload');
