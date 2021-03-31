<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreatePart2Controller;
use App\Http\Controllers\ContentPart2Controller;
use App\Http\Controllers\SearchPart2Controller;
use App\Http\Controllers\ConfirmPart2Controller;
use App\Http\Controllers\GraphPart2Controller;

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


// Route::resource('createPart2', CreatePart2Controller::class);
Route::get('/createPart2', [CreatePart2Controller::class, 'index']);
Route::post('/createPart2/update', [ContentPart2Controller::class, 'update',])->name('updateCreate');


Route::get('/searchPart2', [SearchPart2Controller::class, 'index']);
Route::post('/searchPart2', [SearchPart2Controller::class, 'search',])->name('search');

//join table indicator
Route::get('/contentPart2', [ContentPart2Controller::class, 'index']);
//update
Route::post('/contentPart2/update', [ContentPart2Controller::class, 'update',])->name('update');
Route::post('/contentPart2/update2', [ContentPart2Controller::class, 'update2',])->name('update2');
Route::post('/contentPart2', [ContentPart2Controller::class, 'search_month',])->name('search_month');

Route::get('/confirmPart2', [ConfirmPart2Controller::class, 'index']);

// Route::post('/createPart2/insert_indicator',[CreatePart2Controller::class,'insert_indicator'])->name('insert_indicator');
Route::post('/createPart2/insert_indicator', [CreatePart2Controller::class, 'insert_indicator'])->name('insert_indicator');
// Route::resource('createPart2', CreatePart2Controller::class);

Route::get('/graphPart2', [GraphPart2Controller::class, 'index']);
