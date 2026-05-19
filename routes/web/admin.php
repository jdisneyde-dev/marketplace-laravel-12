<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

//rota admin (o verbo dele é só 'get' porque ele só precisa acessar)...
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');
