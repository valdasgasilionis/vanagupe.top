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
Route::get('/s3list', 'S3Controller@list');
Route::get('/s3store', 'S3Controller@store');
Route::get('/s3multipart', 'S3Controller@multipart');
