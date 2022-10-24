<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [PortfolioController::class, 'homepage'])->name('homepage');

Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
    Route::get('/{project:slug}', [ProjectController::class, 'show'])->name('view');
});
