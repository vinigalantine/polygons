<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'polygons'], function() {
    Route::get('/sum_perimeters', 'PolygonController@sum_perimeters')->name('polygons.sum_perimeters');
    Route::get('/sum_areas', 'PolygonController@sum_areas')->name('polygons.sum_areas');
});

Route::group(['prefix' => 'triangles'], function() {
    Route::get('/{triangle}', 'TriangleController@show')->name('triangles.show');
    Route::post('/', 'TriangleController@store')->name('triangles.store');
    Route::put('/{triangle}', 'TriangleController@update')->name('triangles.update');
    Route::delete('/{triangle}', 'TriangleController@delete')->name('triangles.delete');
});

Route::group(['prefix' => 'rectangles'], function() {
    Route::get('/{rectangle}', 'RectangleController@show')->name('rectangles.show');
    Route::post('/', 'RectangleController@store')->name('rectangles.store');
    Route::put('/{rectangle}', 'RectangleController@update')->name('rectangles.update');
    Route::delete('/{rectangle}', 'RectangleController@delete')->name('rectangles.delete');
});