<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\API\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $user = User::whereEmail($request->email)->first();
        $public_ip = file_get_contents("http://ipecho.net/plain");

        $token = $user->createToken("{$request->userAgent()} - {$public_ip}")->plainTextToken;

        return ResponseFormatter::success([
            'user' => $user,
            'token' => $token
        ], 'Successfully logged in');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): JsonResponse
    {
        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token, 'Token revoked');
    }
}
