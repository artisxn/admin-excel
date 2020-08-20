<?php

use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Support\Facades\Route;
use codicastudio\LaravelNovaExcel\Http\Controllers\ExcelController;

Route
    ::get('download', [ExcelController::class, 'download'])
    ->name('admin-excel.download')
    ->middleware(ValidateSignature::class);
