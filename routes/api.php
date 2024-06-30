<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\CommuneController;
use App\Http\Controllers\Api\StreetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/api/regions' , RegionController::class);
Route::get('/api/getProvinces/{region}' , [RegionController::class , 'listProvinces']);


Route::resource('/api/provinces' , ProvinceController::class);
Route::get('/api/getCommunes/{province}' , [ProvinceController::class , 'listCommunes']);

Route::resource('/api/communes' , CommuneController::class);
Route::get('/api/getStreets/{commune}' , [CommuneController::class , 'listStreets']);

Route::resource('/api/streets' , StreetController::class);
Route::get('/api/searchStreets', [StreetController::class, 'search']);

