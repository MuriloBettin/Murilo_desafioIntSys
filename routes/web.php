<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ColetaResiduoController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

Route::get('/dashboard', [AuthenticatedSessionController::class, 'login'])->middleware(['auth', 'verified'])->name('dashboard');

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
    Route::get('/coleta=edit/{id}', [ColetaResiduoController::class, 'edit'])->name('coleta.edit');
    Route::match(['put', 'patch'],'/coleta=update/{id}', [ColetaResiduoController::class, 'update']);
    Route::match(['put', 'patch'], '/coleta=confirma/{id}', [ColetaResiduoController::class, 'confirmaColeta'])->name('coleta.confirma');
    Route::match(['put', 'patch'], '/coleta=cancela/{id}', [ColetaResiduoController::class, 'cancelaColeta'])->name('coleta.cancela');

    //Tutorial
    Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial');
    
});

require __DIR__.'/auth.php';
