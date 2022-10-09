<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RedirectController;
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

$server = Request::server();
$source = $server["HTTP_HOST"];

if ($source == "127.0.0.1"){
    //TODO: Allow for custom domains to be used
    //TODO: Load domains from database
    //WARNING: This is only for dev purposes, please do not use that as production
    //WARNING: This works by using localhost:80 & 127.0.0.1:80 (php can diff them so that's how I test stuff here)
    Route::get($server["PATH_INFO"]??"/", [RedirectController::class, "process"]);
}

Route::redirect('/', '/login');

//Route::middleware(['auth'])->get('/dashboard/{page?}', function (){
//    return view('dashboard');
//})->name("dashboard")->where('page', '[0-9]+');;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{page?}', [DashboardController::class, 'show'])
        ->name('dashboard')
        ->whereNumber('page');

    Route::get("/newItem", [ItemController::class, "new"])
        ->name("newItem");
});
