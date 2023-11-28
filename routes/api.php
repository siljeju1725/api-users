<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\DepartamentosController;
use App\Http\Controllers\API\CargosController;



Route::apiResource('users',UsersController::class);
Route::apiResource('departamentos',DepartamentosController::class);
Route::apiResource('cargos',CargosController::class);

