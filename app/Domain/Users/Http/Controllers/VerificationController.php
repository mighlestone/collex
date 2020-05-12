<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Domain\Users\Models\User;
use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /**
     * VerificationController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function __invoke(Request $request): JsonResponse
    {
        $user = User::find($request->route('id'));

        if ($user === null) {
            throw new AuthorizationException;
        }

        if (hash_equals((string)$request->route('hash'), sha1($user->getEmailForVerification())) === false) {
            throw new AuthorizationException;
        }

        if ($user->hasVerifiedEmail()) {
            return JsonResponse::create(null, JsonResponse::HTTP_BAD_REQUEST);
        }

        $user->markEmailAsVerified();

        return JsonResponse::create(null, JsonResponse::HTTP_NO_CONTENT);
    }
}