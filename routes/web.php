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


Route::get('/', 'AdminController@login_view');
Route::post('login','AdminController@login')->name('login');
Route::get('login', function () {
    return view('login');
});
Route::get('logout','AdminController@logout')->name('logout');
Route::get('edit_download_message','BdappsController@edit_download_msg');
Route::get('update_sl','BdappsController@update_sl');
Route::get('test','AdminController@test');
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::view('/', 'admin.home')->name('admin');
    Route::get('download-message','AdminController@download_message2')->name('download-message');
    Route::get('error-message','AdminController@error_message')->name('error-message');
    Route::get('item_list','AdminController@item_list')->name('item_list');
    Route::get('route','AdminController@route')->name('route');
    Route::get('voucher-details','AdminController@voucher_details')->name('voucher-details');
    Route::get('voucher-head','AdminController@voucher_head')->name('voucher-head');
    Route::get('edit_item/{id}','AdminController@edit_item');
    Route::post('update_item','AdminController@update_item')->name('update_item');
    Route::get('delete_item_data/{id}','AdminController@delete_item');
    Route::view('add-item','admin.add_item');
    Route::post('add-item','AdminController@add_item')->name('add-item');
	Route::get('route_with_number','AdminController@route_with_number')->name('route_with_number');
	Route::get('response_log','AdminController@response_log')->name('response_log');
    
    Route::view('add-route','admin.add_route');
	Route::view('add-route-with-number','admin.add_route_with_number');
    Route::post('add-route','AdminController@add_route')->name('add-route');
	  Route::post('add-route-with-number','AdminController@add_route_with_number')->name('add-route-with-number');
     Route::get('edit_route/{id}','AdminController@edit_route');
	      Route::get('edit_route_with_number/{id}','AdminController@edit_route_with_number');
     Route::post('update_route','AdminController@update_route')->name('update_route');
	 Route::post('update_route_with_number','AdminController@update_route_with_number')->name('update_route_with_number');
      Route::get('delete_route_data/{id}','AdminController@delete_route');
	   Route::get('delete_route_with_number_data/{id}','AdminController@delete_route_with_number');
      
        Route::get('edit_error_msg/{id}','AdminController@edit_error_msg');
    Route::get('edit_sms','BdappsController@edit_sms')->name('edit_sms');
	Route::get('resend_sms','BdappsController@resend_sms');
      
      Route::get('delete_error_data/{id}','AdminController@delete_error_data');
      Route::view('report_menu','admin.report_menu');
      Route::post('report','AdminController@show_report')->name('show_report');
	  
      
   
});

// 