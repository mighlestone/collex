<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RevokeController extends Controller
{
    /**
     * RevokeController constructor.
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
        Auth::logout();

        return JsonResponse::create([
            'message' => 'Successfully revoked authentication'
        ], JsonResponse::HTTP_NO_CONTENT);
    }
}