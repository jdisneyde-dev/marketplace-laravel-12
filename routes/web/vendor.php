<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

//rota vendor (o verbo dele é só 'get' porque ele só precisa acessar)...
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->middleware(['auth', 'vendor'])->name('vendor.dashboard');
