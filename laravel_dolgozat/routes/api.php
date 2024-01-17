<?php

use App\Http\Controllers\WinningController;
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

Route::get('winnings', [WinningController::class, 'index']);
Route::get('winnings/{user_id}/{item_id}', [WinningController::class, 'show']);
Route::put('winnings/{user_id}/{item_id}', [WinningController::class, 'update']);
Route::post('winnings/{user_id}/{item_id}', [WinningController::class, 'store']);
Route::delete('winnings/{user_id}/{item_id}', [WinningController::class, 'destroy']);