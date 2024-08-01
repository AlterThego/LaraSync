<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePictureController;
use Illuminate\Support\Facades\Route;

Route::get('/playground', function () {
    return view('playground');
});
Route::get('/playground2', function () {
    return view('playground2');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::get('/profile', function () {
//     return view('user-profile');
// })->middleware(['auth', 'verified'])->name('profile');


Route::middleware('auth')->group(function () {
    Route::get('/profile/', [ProfilePictureController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfilePictureController::class, 'update'])->name('user-profile.update');
    Route::delete('/profile', [ProfilePictureController::class, 'destroy'])->name('user-profile.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/settings', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/settings', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/settings', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('home');
    Route::post('/home', [PostController::class, 'store'])->name('home.store');
    Route::get('/home/{post}/edit', [PostController::class, 'edit'])->name('home.edit');
    Route::put('/home/{post}', [PostController::class, 'update'])->name('home.update');
    Route::delete('/home/{post}', [PostController::class, 'destroy'])->name('home.destroy');
});

use App\Http\Controllers\NoteController;

Route::middleware(['auth'])->group(function () {
    Route::get('notes/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('notes', [NoteController::class, 'store'])->name('notes.store');
    Route::get('notes/{user}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('notes/{user}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('notes/{user}', [NoteController::class, 'destroy'])->name('notes.destroy');
});


require __DIR__ . '/auth.php';
