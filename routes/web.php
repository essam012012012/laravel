<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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
    return view('welcome');
});
Route::get("sum/{x}/{y}",[CalcController::class,"sum"]);
Route::get("sub/{x}/{y}",[CalcController::class,"sub"]);
Route::get("milti/{x}/{y}",[CalcController::class,"milti"]);
Route::get("div/{x}/{y}",[CalcController::class,"div"]);

