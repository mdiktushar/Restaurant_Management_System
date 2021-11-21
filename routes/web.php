<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
//     return view('welcome');
// });

Route::get('/',[HomeController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('redirects',[HomeController::class, 'redirects']);
Route::post('addcard/{id}',[HomeController::class, 'addcard']);

Route::get('/users',[AdminController::class, 'user']);
Route::get('/deleteuser/{id}',[AdminController::class, 'delete']);
Route::get('/foodmenue',[AdminController::class, 'foodmenue']);
Route::post('/uploadfood',[AdminController::class, 'upload']);

Route::get('/deletemenue/{id}',[AdminController::class, 'deletemenue']);
Route::get('/updatemenue/{id}',[AdminController::class, 'updatemenue']);
Route::post('/update/{id}',[AdminController::class, 'update']);

Route::post('/reservation',[AdminController::class, 'reservation']);
Route::get('/viewreservations', [AdminController::class, 'viewreservations']);

Route::get('/viewchef', [AdminController::class, 'viewchef']);
Route::post('/uploadchef', [AdminController::class, 'uploadchef']);

Route::get('/deletechef/{id}', [AdminController::class, 'deletechef']);
Route::get('/updatechef/{id}', [AdminController::class, 'updatechef']);
Route::post('/chefdataupdate/{id}', [AdminController::class, 'chefdataupdate']);

Route::get('/showcart/{id}', [HomeController::class, 'showcart']);
Route::get('/remove/{id}', [HomeController::class, 'remove']);
Route::post('/orderconfirm', [HomeController::class, 'orderconfirm']);
Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/serach', [AdminController::class, 'serach']);