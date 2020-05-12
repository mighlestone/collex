<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Domain\Users\Events\ResendVerification;
use Collex\Domain\Users\Models\User;
use Collex\Domain\Users\Notifications\VerifyEmail;
use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;

class ResendVerificationController extends Controller
{
    /**
     * VerificationController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function __invoke(Request $request): JsonResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            JsonResponse::create(null, JsonResponse::HTTP_BAD_REQUEST);
        }

        Event::dispatch(new ResendVerification($request->user()));

        return JsonResponse::create(null, JsonResponse::HTTP_NO_CONTENT);
    }
}