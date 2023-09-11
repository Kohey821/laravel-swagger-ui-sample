<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/swagger-ui')->group(base_path('/lib/Swagger/routes/web.php'));
