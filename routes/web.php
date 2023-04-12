<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/', [CrudController::class, 'index']);


Route::post('add-data', [CrudController::class, 'insert']);
Route::view('add-data', 'addmember');

Route::get('edit/{id}', [CrudController::class, 'edit']);
Route::post('/edit', [CrudController::class, 'update']);

Route::get('delete/{id}', [CrudController::class, 'delete']);