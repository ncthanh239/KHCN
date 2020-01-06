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
    // return view('trangchu.trangchu');
});


Route::get('/test', function (){
	return view('test');
});


Route::get('/donvi', 'DonvithController@donvithuchien');
Route::post('/themdonvi', 'DonvithController@store');
Route::get('/suadonvi/{id}','DonvithController@edit');
Route::post('/updatedv/{id}', 'DonvithController@update');
Route::delete('/deletedv/{id}', 'DonvithController@delete');


Route::get('/chunhiem', 'ChunhiemdtController@chunhiemdetai');
Route::post('/themchunhiem', 'ChunhiemdtController@store');
Route::delete('/deletecn/{id}', 'ChunhiemdtController@delete');
Route::get('/suachunhiem/{id}', 'ChunhiemdtController@edit');
Route::post('updatecn/{id}','ChunhiemdtController@update');


Route::get('/detai', 'DetaiController@detai');
Route::post('/themdetai','DetaiController@themdetai');
Route::get('/suadetai/{id}', 'DetaiController@edit');
Route::post('/updatedt/{id}','DetaiController@update');
Route::delete('/deletedt/{id}', 'DetaiController@delete');

Route::get('/tailieu', 'UploadController@tailieu');
Route::post('/tailieu', 'UploadController@getTaiLieu');
Route::get('/tailieu/download/{id}', 'UploadController@download')->name('downloadfile');
Route::delete('/deletetl/{id}', 'UploadController@delete');



Route::get('/baiviet', 'BaivietController@baiviet');
Route::post('/thembaiviet', 'BaivietController@store');
Route::get('/suabaiviet/{id}','BaivietController@edit');
Route::post('/updatebv/{id}', 'BaivietController@update');
Route::delete('/deletebv/{id}','BaivietController@delete');


Route::get('trangchudetai', 'DetaiController@detaiIndex');






