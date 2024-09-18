<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\ExcelImportController;


Route::get('/certificados',
    function () {
        return view('alumnos');
    }
);

//quiero hacer un controlador
Route::get('/pdf', [pdfController::class,'show'])->name('pdf.show');

// web.php

Route::post('/api/import', [ExcelImportController::class, 'import']);

Route::get('/', [ExcelImportController::class, 'index']);
