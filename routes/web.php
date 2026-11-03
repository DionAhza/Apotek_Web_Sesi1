<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FirstController::class, 'halamanUser']);

Route::get('/page2', 
function(){
    return view('page2');
}
);
  
Route::get('/about',
    [FirstController::class, 'index']
);

Route::middleware('auth')->group(function (){

    Route::get('/obat', [MedicineController::class , 'index']);
    Route::get('/obat/create', [MedicineController::class , 'create']);
    Route::post('/obat/store', [MedicineController::class , 'store']); 
    Route::get('/obat/{id}',[MedicineController::class, 'show']);
    Route::get('/obat/delete/{id}',[MedicineController::class, 'destroy']);
    Route::get('/obat/edit/{id}',[MedicineController::class, 'edit']);
    Route::put('/obat/update/{id}',[MedicineController::class, 'update']);
    });


// Authentication route
Route::middleware('guest')->group( function(){
        Route::get('/register',[AuthController::class, 'register']);
        Route::post('/register/action',[AuthController::class, 'registerAction']);
        Route::get('/login',[AuthController::class, 'login'] )->name('login');
        Route::post('/login/action',[AuthController::class, 'loginAction']);
});

Route::post('/logout', [AuthController::class, 'logout']);