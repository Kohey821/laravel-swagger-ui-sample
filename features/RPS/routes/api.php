<?php

use Features\RPS\Controllers\RPSController;
use Illuminate\Support\Facades\Route;

Route::get('', [RPSController::class, 'get']);
