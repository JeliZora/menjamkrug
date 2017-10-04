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

/*rutovanje za postove*/
Route::get('/oglasi', 'PostsController@index')->name('oglasi');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store')->name('posts');
Route::get('/postoviadmin', 'PostsController@index1')->name('postoviadmin');
Route::get('/postoviuser', 'PostsController@indexuser')->name('postoviuser');
Route::get('/posts/{post}','PostsController@show')->where('post', '[0-9]+')->name('postovi.show');
Route::get('/posts/{post}/edit', 'PostsController@edit')->name('edit');
Route::post('/posts/{post}/update', 'PostsController@update')->name('update');
Route::post('/posts/{post}/comments', 'CommentsController@store');
//Route::get('strana/uputstvo', 'KontrolerStranica@prikazistr');
Route::get('strana/{b}', 'KontrolerStranica@prikazistr');


//Categories and Tags
Route::resource('categories', 'CategoryController',['except'=>['create']]);
Route::resource('tags', 'TagController');

//autentifikacija
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout'); 

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_slika')->name('profile');
//Route::get('/register', 'RegistrationController@create');
//Route::post('/register', 'RegistrationController@store'); 

//Route::get('/login', 'SessionsController@create')->name('login');
//Route::post('/login', 'SessionsController@store');

//Route::get('logout', 'SessionsController@destroy'); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

