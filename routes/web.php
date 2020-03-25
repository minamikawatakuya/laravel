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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
//Route::get('/', function () { return redirect('/home'); });
Route::get('/', 'IndexController@index');
Route::get('/mail', 'MailSendController@index');
Route::get('/json', 'IndexController@json');
Route::get('/json/{id}', 'IndexController@json');
Route::get('/detail', 'IndexController@detail');

Route::get('/vue', 'IndexController@vue');
Route::get('/vue2', 'IndexController@vue2');

Route::get('/vue/detail', 'Vue\IndexController@detail');

Route::get('/api/writers',   'Api\IndexController@writers');
Route::get('/api/articles',   'Api\IndexController@articles');
Route::get('/api/detail',   'Api\IndexController@detail');
 
/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/detail', 'HomeController@detail');
    Route::get('/home/add', 'HomeController@add');
    Route::post('/home/create', 'HomeController@create');
    Route::get('/home/edit', 'HomeController@edit');
    Route::post('/home/update', 'HomeController@update');
});
 
/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});
 
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});
