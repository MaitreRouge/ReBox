<?php

use App\Http\Controllers\DashboardController;
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

Route::redirect('/', '/login');

//Route::middleware(['auth'])->get('/dashboard/{page?}', function (){
//    return view('dashboard');
//})->name("dashboard")->where('page', '[0-9]+');;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{page?}', [DashboardController::class, 'show'])
        ->name('dashboard')
        ->whereNumber('page');
});
