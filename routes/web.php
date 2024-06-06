<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');

Route::get('/', function () {
    return view('Cendekia/home');
})->name('home');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/datasiswa', [StudentController::class, 'store'])->name('students.store');
Route::middleware('auth')->group(function () {
    Route::get('/datasiswa', [StudentController::class, 'index'])->name('students.index');
    Route::get('/datasiswa/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/datasiswa/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/datasiswa/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
