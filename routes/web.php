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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function()
{
    return View('pages.home');
});
Route::get('contractor', function()
{
    return View::make('pages.contractor');
});
Route::get('dayagenda', function()
{
    return View::make('pages.dayagenda');
});
Route::get('employee', function()
{
    return View::make('pages.employee');
});
