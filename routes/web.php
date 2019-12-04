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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/report/{reportname}', ['uses' =>'ViewReportsController@getReport', 'as'=>'report']);


Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('reports', 'ReportsController');
