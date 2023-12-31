<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TransactionController;
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
Route::get('/places', [FerryController::class, 'getPlaces']);
Route::get('/reservations', [ReservationController::class, 'index']);
Route::post('/reservations', [ReservationController::class, 'store']);
Route::get('/transactions', [TransactionController::class, 'index']);
Route::post('/transactions', [TransactionController::class, 'store']);
Route::get('/buses', [FerryController::class, 'index']);
Route::get('/buses/filter', [FerryController::class, 'getFerrySched']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
