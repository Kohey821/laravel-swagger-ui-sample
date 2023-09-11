<?php

use Illuminate\Support\Facades\Route;
use Lib\Swagger\Controllers\SwaggerController;

Route::get('', [SwaggerController::class, 'get']);
