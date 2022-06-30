<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormatJsonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/employee',[EmployeeController::class, 'index'])->name('employee');
Route::post('json/format/web', [FormatJsonController::class, 'store'])->name('send.text');
Route::get('json/format', [FormatJsonController::class, 'index'])->name('json.format');


