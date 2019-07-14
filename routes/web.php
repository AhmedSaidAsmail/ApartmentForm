<?php
Route::get('/customer/login', 'AuthCustomer\LoginController@showLoginForm')->name('customer.login');
Route::post('/customer/login', 'AuthCustomer\LoginController@login')->name('customer.login');
Route::get('/customer/logout', 'AuthCustomer\LoginController@logout')->name('customer.logout');
Route::group(['middleware' => 'auth:customer'], function () {
    Route::get('employee/panel', 'EmployeeController@panel')->name('employee.panel');
    Route::get('apartment/', 'ApartmentsController@create')->name('apartment.add');
    Route::post('apartment/', 'ApartmentsController@store')->name('apartment.store');
});
