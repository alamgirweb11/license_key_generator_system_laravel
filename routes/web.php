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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// create license controler route
Route::post('/home', 'LicenseController@saveValue')->name('save-value');
Route::get('/home', 'LicenseController@ShowData')->name('show-data');
 // active license controller route
Route::get('/home/license-active-form', 'ActiveLicenseController@addForm')->name('license-active-form');
Route::post('/home/license-active-form', 'ActiveLicenseController@activeLicense')->name('active-license');
