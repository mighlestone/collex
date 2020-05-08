<?php

namespace Collex\Domain\Users\Http\Controllers;

use Collex\Domain\Users\Events\UserRegistered;
use Collex\Domain\Users\Http\Requests\RegistrationRequest;
use Collex\Domain\Users\Repositories\RegistrationRepository;
use Collex\Interfaces\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Event;

class RegistrationController extends Controller
{
    /**
     * RegistrationController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param RegistrationRequest $request
     * @return JsonResponse
     */
    public function __invoke(RegistrationRequest $request): JsonResponse
    {
        $payload = $request->only($request::ATTRIBUTES);
        $user = RegistrationRepository::create(Collection::make($payload));

        Event::dispatch(new UserRegistered($user));

        return JsonResponse::create([], JsonResponse::HTTP_CREATED);
    }
}