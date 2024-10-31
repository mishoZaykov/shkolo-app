<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardButtonController;

Route::get('/', [DashboardButtonController::class, 'index'])->name('home');
Route::get('/button/{id}/configure', [DashboardButtonController::class, 'configureButton'])->name('button.configure');
Route::put('/button/{id}', [DashboardButtonController::class, 'updateButton'])->name('button.update');
Route::delete('/button/{id}', [DashboardButtonController::class, 'deleteButton'])->name('button.delete');

