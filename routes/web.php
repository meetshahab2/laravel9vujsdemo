<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NoteController;


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
});
*/


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::any('/spa/{any?}', [SpaController::class, 'spa'])->where(['any' => '.*']);

Route::resource('project', ProjectController::class)->except(['create']);
Route::get('projects/', [ProjectController::class, 'projects'])->name('projects');

Route::resource('note', NoteController::class)->except(['create']);
Route::get('notes/', [NoteController::class, 'notes'])->name('notes');

Route::post('contact', [SpaController::class, 'addContact'])->name('addContact');
Route::get('contacts', [SpaController::class, 'contacts'])->name('contacts');

Route::get('skills', [SpaController::class, 'skills'])->name('skills');
Route::get('languages', [SpaController::class, 'languages'])->name('languages');

