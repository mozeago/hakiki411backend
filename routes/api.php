<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\News;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('news','NewsController@index');
Route::get('news/{news}',' NewsController@show');
Route::post('news', 'NewsController@store');
Route::put('news/{news}', 'NewsController@update');
Route::delete('news/{news}', 'NewsController@delete');