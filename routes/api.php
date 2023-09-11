<?php

use Illuminate\Support\Facades\Route;
use OpenApi\Attributes as OA;

Route::prefix('/')->group(base_path('/lib/Swagger/routes/api.php'));

#[OA\Info(title: 'API', version: '1.0.0')]
class OpenApi
{
}

Route::prefix('/rps')->group(base_path('/features/RPS/routes/api.php'));
