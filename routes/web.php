<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(AgentController::class)->group(function(){
    Route::resource('agents', AgentController::class);
    Route::get('agents/role/{role}', [AgentController::class, 'getByRole']);
    Route::get('agents/name/{name}', [AgentController::class, 'getByName']);
});
