<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/article/{article}','ArticlesController@show')->name('show');

// 用户身份验证相关的路由
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 用户注册相关路由
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 密码重置相关路由
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email 认证相关路由
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// 用户资源
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::get('/password/{user}/edit', 'UsersController@passwordEdit')->name('password.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
Route::patch('/password/{user}', 'UsersController@passwordUpdate')->name('password.update');

// 发布文章页面及方法
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::post('/articles', 'ArticlesController@store')->name('articles.store');

// 修改编辑文章页面及方法
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::patch('/articles/{article}', 'ArticlesController@update')->name('articles.update');

// 删除文章方法
Route::delete('/articles/{article}', 'ArticlesController@destroy')->name('articles.destroy');

// 文章图片上传
Route::post('upload_image', 'ArticlesController@uploadImage')->name('articles.upload_image');

// 文章分类列表
Route::resource('categories', 'CategoriesController', ['only' => ['show']]);

// 判断进入后台
Route::get('permission-denied', 'PagesController@permissionDenied')->name('permission-denied');

// 关注页面
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');

// 关注功能
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');