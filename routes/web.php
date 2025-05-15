<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//一覧表示（誰でもOK）
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

//詳細（誰でもOK）
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

// レビュー投稿フォーム表示（ログインユーザーのみ）
Route::get('/cars/{car}/reviews/create', [ReviewController::class, 'create'])->middleware('auth')->name('reviews.create');

// レビュー登録処理（ログインユーザーのみ）
Route::post('/cars/{car}/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');

// レビュー削除処理（ログイン中の本人投稿のみ）
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->middleware('auth')->name('reviews.destroy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
