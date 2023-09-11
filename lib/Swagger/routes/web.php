<?php

use Illuminate\Support\Facades\Route;

Route::get('', fn () => view()->file(base_path('/lib/Swagger/resources/views/index.blade.php')));
