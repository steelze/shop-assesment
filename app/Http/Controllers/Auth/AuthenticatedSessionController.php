<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\RespondWith;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $user = $request->authenticate();

        $token = $user->createToken($user->email);
        return RespondWith::success(['user' => $user, 'token' => $token->plainTextToken]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): JsonResponse
    {
        // Revoke the token that was used to authenticate the current request...
        $request->user()->currentAccessToken()->delete();
        return RespondWith::success(code: Response::HTTP_NO_CONTENT);
    }
}