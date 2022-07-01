<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\FormatJsonController;
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
Route::post('json/format', [FormatJsonController::class, 'store']);
Route::get('employee', [EmployeeController::class, 'index']);
Route::get('employee/salary', [EmployeeController::class, 'getSumSalariesGroupByCity']);

