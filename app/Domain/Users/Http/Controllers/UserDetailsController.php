<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Domain\Users\Http\Resources\UserResource;
use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserDetailsController extends Controller
{
    /**
     * UserDetailsController constructor.
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
        return JsonResponse::create(
            new UserResource(Auth::user()),
            JsonResponse::HTTP_OK
        );
    }
}