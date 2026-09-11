<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;

Route::get('/', 
function (){
    return view('index');
} 
);

Route::get('/page2', 
function(){
    return view('page2');
}
);
  
Route::get('/about',
    [FirstController::class, 'index']
);

Route::get('/obat', [MedicineController::class , 'index']);
Route::get('/obat/create', [MedicineController::class , 'create']);
Route::post('/obat/store', [MedicineController::class , 'store']); 
Route::get('/obat/{id}',[MedicineController::class, 'show']);
Route::get('/obat/delete/{id}',[MedicineController::class, 'destroy']);
Route::get('/obat/edit/{id}',[MedicineController::class, 'edit']);
Route::put('/obat/update/{id}',[MedicineController::class, 'update']);