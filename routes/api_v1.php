<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TrainingController;

Route::apiResource('trainings', TrainingController::class)->middleware('auth:sanctum');
