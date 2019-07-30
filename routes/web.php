<?php
Route::get('/customer/login', 'AuthCustomer\LoginController@showLoginForm')->name('customer.login');
Route::post('/customer/login', 'AuthCustomer\LoginController@login')->name('customer.login');
Route::get('/customer/logout', 'AuthCustomer\LoginController@logout')->name('customer.logout');
Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('/', 'EmployeeController@panel')->name('employee.panel');
    Route::get('employee/apartment/show/{id}', 'ApartmentsController@show')->name('employee.apartment.show');
    Route::resource('employee/apartment/', 'ApartmentsController', ['as' => 'apartment']);


    // Route::get('apartment/testing/{tst}', 'ApartmentsController@test')->name('apartment.add');
    // Route::post('apartment/', 'ApartmentsController@store')->name('apartment.store');
});
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\LoginController@login')->name('admin.login');
Route::get('/admin/logout', 'Auth\LoginController@logout')->name('admin.logout');
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/admin', 'AdminController@panel')->name('admin.panel');
    Route::get('/customer/register', 'AuthCustomer\RegisterController@showRegistrationForm')->name('customer.register');
    Route::post('/customer/register', 'AuthCustomer\RegisterController@register')->name('customer.register');
    Route::resource('neighborhoods', 'NeighborhoodsController');
});

