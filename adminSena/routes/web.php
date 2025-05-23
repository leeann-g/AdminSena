<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicios.index');
})->name('inicio');


Route::get('/Area/Create',[AreaController::class, 'mostrarFormulario'])->name('area.create');
Route::post('/Area/store',[AreaController::class, 'store'])->name('area.store');
Route::get('Areas/Guardadas', [AreaController::class, 'index'])->name('area.index');


Route::get('/Trainingcenter/Create', [TrainingCenterController::class, 'mostrarFormulario'])->name('trainingCenter');
Route::post('/TrainingCenters/Store', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');
Route::get('/TrainingCenters/Guardadas',[TrainingCenterController::class, 'index'])->name('trainingcenter.index');



Route::get('/Computer/Create', [ComputerController::class, 'mostrarFormulario'])->name('computer');
Route::post('/Computer/Store', [ComputerController::class, 'store'])->name('computer.store');
Route::get('/Computer/Guardadas', [ComputerController::class, 'index'])->name('computer.index');