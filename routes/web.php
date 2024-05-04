<?php

use App\Http\Controllers\PasienController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PasienController::class, 'index']) -> name ('home');
Route::get('/create', [PasienController::class, 'create']) -> name ('create');
Route::post('/create', [PasienController::class, 'save']);
Route::get('/edit{id}', [PasienController::class, 'edit']) -> name ('edit');
Route::post('/edit{id}', [PasienController::class, 'update']);
Route::get('/delete{id}', [PasienController::class, 'delete']) -> name ('delete');