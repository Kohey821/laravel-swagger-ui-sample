<?php

namespace Lib\Swagger\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use OpenApi\Generator;

class SwaggerController extends Controller
{
    public function get(): Response
    {
        $openApi = Generator::scan([base_path('/routes'), base_path('/features')]);

        return response($openApi?->toJson(), headers: ['Content-Type' => 'application/json']);
    }
}
