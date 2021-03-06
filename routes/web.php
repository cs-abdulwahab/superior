<?php

use App\Employee;

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

Route::resource('employees','EmployeeController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/import','EmployeeController@import')->name('emp-import');

Route::get('/page1',function(){

return view('page1');
});


Route::resource('departments','DepartmentController');


Route::get('/page2',function(){

    return view('page2');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
