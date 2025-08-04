<?php





use Illuminate\Support\Facades\Route;
use App\Http\Controllers\marcasController;
use App\Http\Controllers\AuthController;

Route::apiResource('marcas', marcasController::class);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);


