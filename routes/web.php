<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     $page = 'welcome';
//     return $this->dyn($page);
// });

Route::get('/', [MainController::class, 'welcome'])->name('/');
Route::get('/wards/{lga_id}', [MainController::class, 'wards'])->name('wards');
Route::get('/all_lga_poll/{lga_id}', [MainController::class, 'all_lga_poll'])->name('all_lga_poll');
Route::get('/poll_units/{ward_id}', [MainController::class, 'poll_units'])->name('poll_units');
Route::get('/polling_results/{uniqueid}', [MainController::class, 'polling_results'])->name('polling_results');
Route::get('/lga_results', [MainController::class, 'lga_results'])->name('lga_results');
Route::get('/new_poll/{ward_id}', [MainController::class, 'new_poll'])->name('new_poll');
Route::get('/new_result/{ward_id}', [MainController::class, 'new_result'])->name('new_result');
Route::post('/fetch_results', [MainController::class, 'fetch_results'])->name('fetch_results');
Route::post('/add_unit', [MainController::class, 'add_unit'])->name('add_unit');
Route::post('/add_result', [MainController::class, 'add_result'])->name('add_result');
