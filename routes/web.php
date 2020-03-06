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

use App\Http\Controllers\LabController;
use Illuminate\Support\Facades\Route;


Route::get('/','LabController@searchFilter')->name('searchFilter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/category','LabController@addCategory')->name('addCategory');
Route::post('/category','LabController@storeCategory')->name('storeCategory');
Route::get('/subcategory','LabController@addSubCategory')->name('addSubCategory');
Route::post('/subcategory','LabController@storeSubCategory')->name('storeSubCategory');
Route::get('/hardware','LabController@addHardWare')->name('addHardWare');
Route::post('/hardware','LabController@storeHardWare')->name('storeHardWare');
Route::get('/hardware_list','LabController@hardWareList')->name('hardWareList');
Route::delete('delete_hardware/{id}','LabController@deleteHardWare' )->name('hardWareDelete');
Route::get('edit_hardWare/{id}','LabController@editHardWare')->name('editHardWare');
Route::put('update_hardWare/{id}','LabController@updateHardWare')->name('updateHardWare');

