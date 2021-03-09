<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreatePart2Controller;
use App\Http\Controllers\ContentPart2Controller;
use App\Http\Controllers\SearchPart2Controller;

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

Route::get('/', function () {
    return view('login');
});

// Route::post('/login', [LoginController::class, 'index'])->name('login');


// Route::post('/Valid', [LoginController::class,'index'],function ($argv){

// } )->name('valid');
Route::post('/index', function () {
    return view('index');
})->name('/');


Route::get('/createPart2',[CreatePart2Controller::class,'index']);

Route::get('/searchPart2',[SearchPart2Controller::class,'index']);

Route::get('/contentPart2',[ContentPart2Controller::class,'index']);

