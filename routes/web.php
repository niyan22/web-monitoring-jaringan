<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\NetworkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard.index'))->name('dashboard');
    
    Route::get('/system', [SystemController::class, 'index'])->name('system');
    Route::get('/system/create', [SystemController::class, 'create'])->name('system.create');
    Route::post('/system', [SystemController::class, 'store'])->name('system.store');
    Route::get('/system/{systemMetric}/edit', [SystemController::class, 'edit'])->name('system.edit');
    Route::patch('/system/{systemMetric}', [SystemController::class, 'update'])->name('system.update');
    Route::delete('/system/{systemMetric}', [SystemController::class, 'destroy'])->name('system.destroy');
    
    Route::get('/network', [NetworkController::class, 'index'])->name('network');
    Route::get('/network/create', [NetworkController::class, 'create'])->name('network.create');
    Route::post('/network', [NetworkController::class, 'store'])->name('network.store');
    Route::get('/network/{networkTraffic}/edit', [NetworkController::class, 'edit'])->name('network.edit');
    Route::patch('/network/{networkTraffic}', [NetworkController::class, 'update'])->name('network.update');
    Route::delete('/network/{networkTraffic}', [NetworkController::class, 'destroy'])->name('network.destroy');
    
    Route::get('/settings', fn() => view('settings.index'))->name('settings');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
