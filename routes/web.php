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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Indexcontroller@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::match(['get','post'],'/admin','AdminController@login');

Route::group(['middleware'=>['auth']],function(){
	
	Route::match(['get','post'],'/dashboard','AdminController@dashboard');

	//user profile routes
	Route::match(['get','post'],'/addprofile','Profilecontroller@addprofile');
	Route::match(['get','post'],'/viewprofile','Profilecontroller@viewprofile');
	Route::match(['get','post'],'/editprofile/{id}','Profilecontroller@editprofile');
	Route::match(['get','post'],'/deleteprofile/{id}','Profilecontroller@delete');

	//about routes
	Route::match(['get','post'],'/addabout','Aboutcontroller@addabout');
	Route::match(['get','post'],'/viewabout','Aboutcontroller@viewabout');
	Route::match(['get','post'],'/editabout/{id}','Aboutcontroller@editabout');
	Route::match(['get','post'],'/deleteabout/{id}','Aboutcontroller@delete');

	//blog routes
	Route::match(['get','post'],'/addblog','Blogpostcontroller@addblog');
	Route::match(['get','post'],'/blog/post/{id}','Blogpostcontroller@blogPost');
	Route::match(['get','post'],'/viewblog','Blogpostcontroller@viewblog');
	Route::match(['get','post'],'/editblog/{id}','Blogpostcontroller@editblog');
	Route::match(['get','post'],'/deleteblog/{id}','Blogpostcontroller@delete');


});

Route::match(['get','post'],'/about','Aboutcontroller@about');
Route::get('/logout','Admincontroller@logout');


