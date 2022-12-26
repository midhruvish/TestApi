<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApi;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getdata',[App\Http\Controllers\DummyApi::class, 'ApiDate']);
Route::get('showdata/{id?}',[App\Http\Controllers\DummyApi::class, 'show']);
Route::post('adddata',[App\Http\Controllers\DummyApi::class,'add']);
Route::put('editdata',[App\Http\Controllers\DummyApi::class,'edit']);
