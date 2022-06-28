<?php

use App\Http\Controllers\CarSellingSubmissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\GoogleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/datamobil', [MobilController::class, 'getData']);
Route::get('/datamobil/{id}', [MobilController::class, 'show']);
Route::get('/kmrendah', [MobilController::class, 'getDataKM']);
Route::get('/sertif', [MobilController::class, 'getDataSertif']);
Route::get('/murah', [MobilController::class, 'getDataMurah']);
Route::post('/carimobil', [MobilController::class, 'cariMobil']);
Route::get('/brand', [MobilController::class, 'getDataBrand']);
Route::get('/merk/{id}', [MobilController::class, 'getMerk']);
Route::get('/model', [MobilController::class, 'getDataModel']);
Route::get('/model-by-brand/{brand}', [MobilController::class, 'getModelByBrand']);

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/datauser', [GoogleController::class, 'handleGoogleCallback']);

Route::post('/car-selling-submission', [CarSellingSubmissionController::class, 'store']);