<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AgentController;
use App\Http\Controllers\Api\RegisterController;

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

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');   
});

Route::controller(AgentController::class)->group(function(){
    Route::resource('agents', AgentController::class);
    Route::get('agents/role/{role}', [AgentController::class, 'getByRole']);
    Route::get('agents/name/{name}', [AgentController::class, 'getByName']);
});
        
Route::middleware('auth:sanctum')->group(function () {
    //Route::resource('agents', AgentController::class);
    Route::post('agents/add/', [AgentController::class, 'store']);
    Route::post('agents/update/{id}', [AgentController::class, 'update']);
    Route::delete('agents/delete/{id}', [AgentController::class, 'destroy']);
});

