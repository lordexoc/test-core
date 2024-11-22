<?php

use Odyssey\TestCore\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'login'])->name('core.login');