<?php

use App\Http\Controllers\BuyTicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainTicketController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/train-tickets', [TrainTicketController::class, 'index'])->name('train-tickets.index');
Route::get('/train-tickets/create', [TrainTicketController::class, 'create'])->name('train-tickets.create');
Route::post('/train-tickets', [TrainTicketController::class, 'store'])->name('train-tickets.store');
Route::get('/train-tickets/{id}/edit', [TrainTicketController::class, 'edit'])->name('train-tickets.edit');
Route::put('/train-tickets/{id}', [TrainTicketController::class, 'update'])->name('train-tickets.update');
Route::delete('/train-tickets/{id}', [TrainTicketController::class, 'destroy'])->name('train-tickets.destroy');
Route::get('/train-tickets', [BuyTicketController::class, 'index'])->name('train-tickets.index');
Route::get('/train-tickets/{id}/buy', [BuyTicketController::class, 'buy'])->name('train-tickets.buy');
Route::post('/train-tickets/{id}/buy', [BuyTicketController::class, 'storeTrans'])->name('train-tickets.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');