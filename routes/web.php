<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/review/check', function () {
//     return view('check');
// });

Route::get('/', [MainController::class, 'home']);

//Новости
Route::get('/news', [MainController::class, 'news']);

//Страница про нас
Route::get('/about', [MainController::class, 'about']);

//Удалить все азаписи со статьями
Route::get('/delete_all', [MainController::class, 'delete_all']);

//Страница с отзывами
Route::get('/review', [MainController::class, 'review']);

Route::post('/review/check', [MainController::class, 'check']);

Route::get('/user', [MainController::class, 'user']);

//Страница с продуктом
Route::get('/product', [MainController::class, 'product']);

//Страница с авторизацией
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';