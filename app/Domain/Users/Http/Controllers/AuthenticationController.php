<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Domain\Users\Http\Requests\AuthenticationRequest;
use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    /**
     * AuthenticationController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param AuthenticationRequest $request
     * @return JsonResponse
     */
    public function __invoke(AuthenticationRequest $request): JsonResponse
    {
        $credentials = $request->only($request::ATTRIBUTES);
        $token = Auth::attempt($credentials);

        if ($token === false) {
            return JsonResponse::create([
                'error' => 'Unauthorised'
            ], JsonResponse::HTTP_UNAUTHORIZED);
        }

        return JsonResponse::create([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ], JsonResponse::HTTP_ACCEPTED);
    }
}