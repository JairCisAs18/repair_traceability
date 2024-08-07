<?php

use App\Http\Controllers\PartsController;
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

Route::get('/', [PartsController::class, 'readParts']);
Route::post('/addPart', [PartsController::class, 'addPart']);
Route::get('/scrap-parts', [PartsController::class, 'readScrapParts']);
Route::get('/repaired-parts', [PartsController::class, 'readRepairedParts']);
Route::post('/add-scrap', [PartsController::class, 'addToScrap']);
Route::post('/add-repaired', [PartsController::class, 'addToRepaired']);

Route::get('/check-connection', function(){
    return view('checkDB');
});
