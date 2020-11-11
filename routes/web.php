<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', '\App\Http\Controllers\CarController@getAllCars')->name('cars.all');
Route::post('/car/delete', '\App\Http\Controllers\CarController@deleteCar')->name('car.delete');
Route::post('/car/add', '\App\Http\Controllers\CarController@createCar')->name('car.add');
Route::get('/car/{id}/edit', '\App\Http\Controllers\CarController@editCar')->name('car.edit');
Route::post('/car/{id}/update', '\App\Http\Controllers\CarController@updateCar')->name('car.update');
Route::get('/add/cars', '\App\Http\Controllers\CarController@insertData');
