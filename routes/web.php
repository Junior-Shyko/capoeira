<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\StudentTimeline;
use App\Models\Master;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
     
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/masters', function () {
        $masters = Master::with('students')->get();
        return view('masters', compact('masters'));
    })->name('masters');

    Route::get('/master/{master}', function (Master $master) {
        $students = $master->students;
        return view('students', compact('master', 'students'));
    })->name('master.students');

    Route::get('/student/{student}', function (Student $student) {
        return view('student', compact('student'));
    })->name('student.show');
});


require __DIR__.'/auth.php';
