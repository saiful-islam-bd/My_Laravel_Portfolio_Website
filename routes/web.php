<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\TrashController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin');

    Route::get('/trashed', [TrashController::class, 'trashed'])->name('trashed');

    //intro restore
    Route::get('intro/{id}/restore', [TrashController::class, 'introRestore'])->name('intro.restore');
    //intro permanent delete
    Route::delete('intro/{id}/deleted', [TrashController::class, 'introForceDelete'])->name('intro.force_delete');

    
    //about restore
    Route::get('about/{id}/restore', [TrashController::class, 'aboutRestore'])->name('about.restore');
    //about permanent delete
    Route::delete('about/{id}/deleted', [TrashController::class, 'aboutForceDelete'])->name('about.force_delete');


    //resource controller of CRUD
    Route::resource('/intro', IntroController::class);

    Route::resource('/about', AboutController::class);
});
