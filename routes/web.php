<?php
use Illuminate\Support\Facades\Route;
Route::get('/','UserController@index');
Route::get('user-login','UserController@index')->name('user-login');
Auth::routes();

Route::group(['middleware'=>'Admin','namespace'=>'Admin','prefix'=>'admin'],function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

});

Route::group(['middleware'=>'Customer','namespace'=>'Customer','prefix'=>'customer'],function () {
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('data-list', 'DashboardController@DataList')->name('data-list');
Route::post('data-post', 'DashboardController@DataPost')->name('data-post');
Route::post('data-update', 'DashboardController@DataUpdate')->name('data-update');
Route::get('data-delete', 'DashboardController@DataDelete')->name('data-delete');

});


Route::group(['middleware'=>'CustomerSupport','namespace'=>'CustomerSupport','prefix'=>'customer-support'],function () {
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});




// Route::get('customer-dashboard', 'Customer\HomeController@index')->name('customer-dashboard')->middleware('Customer');

//Route::get('/home', 'HomeController@index')->name('home');
