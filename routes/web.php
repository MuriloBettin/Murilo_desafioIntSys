<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ColetaResiduoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/ajuda', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    //Coleta
    Route::get('/coleta=cadastrar', [ColetaResiduoController::class, 'index'])->name('coleta.cadastrar');
    Route::get('/coleta=listar', [ColetaResiduoController::class, 'show'])->name('coleta.listar');
    Route::get('/coleta=confirmar', [ColetaResiduoController::class, 'showNaoCompletas'])->name('coleta.confirmar');

    //CRUD
    Route::post('/coleta=register', [ColetaResiduoController::class, 'store'])->name('coleta.register');
});

require __DIR__.'/auth.php';
