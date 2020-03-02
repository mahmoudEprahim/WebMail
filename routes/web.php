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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pages blog

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/profile', 'PagesController@profile');
Route::get('/contact', 'PagesController@contact');
Route::post('/addcontact', 'PagesController@addcontact')->name('addcontact');




//pages blog post
Route::get('/posts','PostsController@index')->name('posts.index');
Route::get('create', 'PostsController@create')->name('create');
Route::post('/add', 'PostsController@add')->name('add');
Route::get('/posts/{id}','PostsController@show')->name('posts.show');


//route edit post
Route::get('/posts/{id}/edit','PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostsController@update')->name('posts.update');

Route::delete('/posts/{id}','PostsController@destroy')->name('posts.destroy');


//admin
Route::get('/admin', 'AdminController@index');
Route::get('/user', 'AdminController@user');

//route edit user profile
Route::get('/user/{id}/edit','AdminController@edit')->name('admin.edit');
Route::put('/user/{id}','AdminController@update')->name('admin.update');



//section
Route::get('/section', 'SectionController@section');
Route::post('/addsection', 'SectionController@addsection')->name('addsection');
Route::delete('/section/{id}','SectionController@delete')->name('section.delete');


