<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Step_1Controller;
use App\Http\Controllers\Step_2Controller;
use App\Http\Controllers\Step_3Controller;
use App\Http\Controllers\Step_4Controller;
use App\Models\Step_1;

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


Route::get('/', [Step_1Controller::class, 'form'])->name('step_1');
Route::get('/step-1', [Step_1Controller::class, 'form'])->name('step_1');
Route::post('/tempor-1', [Step_1Controller::class, 'tempor'])->name('step_1.tempor');

Route::get('/step-2', [Step_2Controller::class, 'form'])->name('step_2');
Route::post('/tempor-2', [Step_2Controller::class, 'tempor'])->name('step_2.tempor');

Route::get('/step-3', [Step_3Controller::class, 'form'])->name('step_3');
Route::post('/tempor-3', [Step_3Controller::class, 'tempor'])->name('step_3.tempor');

Route::get('/step-4', [Step_4Controller::class, 'form'])->name('step_4.form');
Route::post('/tempor-4', [Step_4Controller::class, 'tempor'])->name('step_4.tempor');
