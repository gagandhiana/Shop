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

Route::get('/', function () {
    return view('welcome');
});

//*********************Insert Data**********************

Route::post('add-product','App\Http\Controllers\IController@insert_data');

//*********************Views****************************

Route::get('/login-page','App\Http\Controllers\IController@login_page');
Route::get('contact','App\Http\Controllers\IController@contact_us');
Route::get('check-out{id}','App\Http\Controllers\IController@check_out');
Route::get('dis-pro','App\Http\Controllers\IController@dis_pro');
Route::get('addproject','App\Http\Controllers\IController@add_project');
Route::get('all-products','App\Http\Controllers\IController@all_products');

//*******************Display Data**********************

Route::get('homepage','App\Http\Controllers\IController@home_page');
Route::get('displaycategory/{id}','App\Http\Controllers\IController@display_category');
Route::get('search-product','App\Http\Controllers\IController@search_product');

//*********************SignUp*************************

Route::post('signup-details-submit','App\Http\Controllers\IController@signup_details_submit');
Route::post('login-details-submit','App\Http\Controllers\IController@login_details_submit');

//******************Contact Us**********************

Route::post('contact-us-data','App\Http\Controllers\IController@contact_us_data');

//*******************Cart***************************

Route::get('cart{id}','App\Http\Controllers\IController@my_cart');
Route::post('add','App\Http\Controllers\IController@add_to_cart');
Route::get('co{id}','App\Http\Controllers\IController@c_o');
Route::post('checko{id}','App\Http\Controllers\IController@ct');
Route::get('remove-product/{id}','App\Http\Controllers\IController@remove');

//****************Log Out*************************

Route::get('/log-out','App\Http\Controllers\IController@logout_page');

