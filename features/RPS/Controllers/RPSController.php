<?php

namespace Features\RPS\Controllers;

use Illuminate\Http\JsonResponse;
use OpenApi\Attributes as OA;

class RPSController
{
    #[OA\Schema(type: 'object', schema: 'RPSResponse', properties: [
        new OA\Property(property: 'hand', type: 'string', enum: ['rock', 'paper', 'scissors']),
    ])]
    #[OA\Get(path: '<rps-root>', responses: [
        new OA\Response(response: 200, description: 'OK', content: new OA\JsonContent(ref: '#/components/schemas/RPSResponse')),
        new OA\Response(response: 418, description: "I'm a teapot"),
    ])]
    public function get(): JsonResponse
    {
        $pots = ['iPod', 'iPad', 'teapot'];
        $potKey = array_rand($pots);
        if ($pots[$potKey] === 'teapot') {
            return response()->json(null, 418);
        }

        $hands = ['rock', 'paper', 'scissors'];
        $handKey = array_rand($hands);
        return response()->json(['hand' => $hands[$handKey]]);
    }
}
