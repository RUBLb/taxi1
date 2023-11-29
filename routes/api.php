<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('Order')->group(function(){
    Route::get('/date',[OrderController::class, 'date']);
    Route::get('/place_of_dicpatch',[OrderController::class, 'place_of_dicpatch']);
    Route::get('/place_of_arrival',[OrderController::class, 'place_of_arrival']);
    Route::get('/price',[OrderController::class, 'price']);
    Route::get('/order_status',[OrderController::class, 'order_status']);
    Route::get('/feedback',[OrderController::class, 'feedback']);
    Route::get('/workers_id',[OrderController::class, 'workers_id']);
    Route::get('/dispatchers_id',[OrderController::class, 'dispatchers_id']);
    Route::post('/', [OrderController::class, 'store']);
});
Route::prefix('Dispatcher')->group(function(){
    Route::get('/name',[DispatcherController::class, 'name']);
    Route::get('/number',[DispatcherController::class, 'number']);
    Route::post('/', [DispatherController::class, 'store']);
});

Route::prefix('Worker')->group(function(){
    Route::get('/name',[WorkerController::class, 'name']);
    Route::get('/car_brand',[WorkerController::class, 'car_brand']);
    Route::get('/car_number',[WorkerController::class, 'car_number']);
    Route::get('/car_color',[WorkerController::class, 'car_color']);
    Route::get('/driver_status',[WorkerController::class, 'driver_status']);
    Route::post('/', [WorkerController::class, 'store']);
});