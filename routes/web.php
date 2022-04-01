<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route:: get('/full-name-maker-page', [HomeController::class, 'fullName'])->name('full-name-maker');

Route:: get('/student-registration', [HomeController::class, 'registration'])->name('registration');


Route:: post('/fullName', [HomeController::class, 'fullNameMaker'])->name('fullName');

Route:: post('registration-form',[HomeController::class, 'registrationForm'])->name('registration-form');
