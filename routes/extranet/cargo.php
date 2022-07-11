<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\cargoController;
use Illuminate\Support\Facades\Route;



Route::prefix('extranet')->middleware(['throttle:acces-limit'])->group(function(){
    Route::get('cargo/index',function(){
        return "cargo index";
    });
    
    /*Route::get('cargo/create',function(){
        return "cargo crear";
    });*/

   // Route::get('cargo/calcular/{id}', [CargoController::class, 'calcular' ]);

   Route::get('cargo', [CargoController::class, 'index']);
   Route::get('cargo/create', [CargoController::class, 'create']);
   Route::get('cargo/edit/{id}', [CargoController::class, 'edit']);
});

