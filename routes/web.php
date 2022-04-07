<?php

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

//site///
Route::group(['namespace'=>'Site','middleware'=>'auth','prefix'=>'site'],function (){
    Route::get('/', 'SiteController@site')->name('site');
    Route::get('logout', 'ClientController@logout')->name('site.logout');
    Route::get('/search', 'SiteController@SearchFriend')->name('search_friend');

    Route::get('Add_friend/{id}', 'SiteController@add_frind')->name('add_friend');
    Route::get('delete_friend/{id}', 'SiteController@delete_frind')->name('delete_friend');

});
//my page//
Route::group(['namespace'=>'Site','middleware'=>'auth','prefix'=>'site'],function (){
    Route::get('/my_page', 'Mypage@mypage')->name('mypage');
    Route::get('/EditProfile', 'Mypage@editprofile')->name('EditProfile');
    Route::post('/UpdateProfile', 'Mypage@updateprofile')->name('update_mypage');
    Route::post('/UpdatePhoto', 'Mypage@update_Personal_photo')->name('update_personalPhoto');
    Route::post('/UpdateCoverPhoto', 'Mypage@update_cover_photo')->name('update_coverPhoto');
    Route::get('/EditPassword', 'Mypage@editpassword')->name('update_password');
    Route::post('/updatePassword', 'Mypage@updatepassword')->name('edit_password');
    Route::post('/make_post', 'Mypage@makePost')->name('make_post');
    Route::get('/delete_post/{id}', 'Mypage@deletePost')->name('delete_post');
    Route::post('/update_post', 'Mypage@updatePost')->name('update_post');
    Route::post('/comment', 'Mypage@create_Comment')->name('createComment');
    Route::get('/delete_comment/{id}', 'Mypage@deleteComment')->name('delete_comment');
    Route::get('/friendAccept', 'Mypage@acceptFriend')->name('accept_friend');
    Route::get('/Accept/{id}', 'Mypage@accept')->name('accept');
    Route::get('/MyFriends', 'Mypage@MyFriends')->name('MyFriend');
    Route::get('/remove_friend/{id}', 'Mypage@remove_friend')->name('remove_friend');

    Route::get('/ddd', 'Mypage@showposts');

});
//login//
Route::group(['namespace'=>'Site','prefix'=>'site','middleware' => 'guest:web'],function (){
   Route::get('login','ClientController@loginPage')->name('login.page');
   Route::post('postLogin','ClientController@Createlogin')->name('site.login');
    Route::post('register','ClientController@Register')->name('site.register');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
