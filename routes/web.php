<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

//GET
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index') ;
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create') ;
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show') ;
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit') ;

//POST
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store') ;

//PUT
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');

//DELETE
Route::delete('supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');