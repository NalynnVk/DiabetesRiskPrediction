<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiabetesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/diabetes', [DiabetesController::class, 'index']);
Route::get('/', 'App\Http\Controllers\DiabetesController@index');

// Existing route for displaying data
Route::get('/data', [DiabetesController::class, 'index']);

// Route for handling form submission with filters
Route::get('/filter-data', [DiabetesController::class, 'filterData'])->name('filter.data');


// Route::controller(App\Http\Controllers\DiabetesController::class)->group(function() {
//     Route::get('/', 'index');
//     Route::get('/{indexID}', 'show');
// });

// Route::get('/diabetes/age/{age}', [DiabetesController::class, 'filterByAge']);

// Route::get('/diabetes/gender/{gender}', [DiabetesController::class, 'filterByGender']);
