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

Route::get('/login', function() {
    return view('login');
})->name('login');

// Route::get('/test', 'PaymentController@test');

// Route::get('/miller', function(){
//     return view('miller');
// })->name('miller');



//Users
Route::post('/user', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');
Route::get('/register', 'UsersController@register');
Route::post('/create_account', 'UsersController@createAccount');

//Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/delete', 'DashboardController@delete')->name('event_delete');

//Events
Route::get('/publish', 'EventController@index')->name('event');
Route::post('/event_store', 'EventController@storeEvent')->name('save_event');

//Form
Route::get('/form', 'FormController@index')->name('form');
Route::get('/getBooths', 'FormController@getBoothSpaces')->name('booths');
Route::post('/join_events', 'FormController@saveAttendee')->name('join');

//Vendor
Route::get('/vendors', 'VendorController@index')->name('vendors');
Route::post('/manual_add', 'VendorController@vendor_add')->name('vendor_store');

//Miller Homepage
Route::get('/', 'MillerController@index')->name('miller_home');
Route::get('/setup', 'MillerController@setup')->name('setup');
Route::get('contact', 'MillerController@contact')->name('contact');
Route::get('/testimonials', 'MillerController@testimonials')->name('testimonials');

//Paypal
//payment form
Route::get('/test', 'PaymentController@index');

// route for processing payment
// Route::post('paypal', 'PaymentController@payWithpaypal');
Route::post('paypal', 'PaymentController@saveVendor');


// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');


// route for processing payment
Route::post('paypalvend', 'PaymentController@payWithpaypal');
Route::post('paypalcomercial', 'PaymentController@payWithpaypalcom');

// route for check status of the payment
Route::get('statusvend', 'PaymentController@getPaymentStatus');