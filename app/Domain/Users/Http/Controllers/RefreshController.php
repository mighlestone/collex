<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RefreshController extends Controller
{
    /**
     * RefreshController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return JsonResponse::create([
            'access_token' => Auth::refresh(),
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ], JsonResponse::HTTP_ACCEPTED);
    }
}