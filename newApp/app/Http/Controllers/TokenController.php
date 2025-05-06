<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\JsonResponse;

class TokenController extends Controller
{
    public function setUserToken(Request $request): JsonResponse
    {
        // $token = 'your_generated_token_here'; 
        $token = 'saini'; 

        return response()->json([
            'message' => 'Token set successfully',
            'token' => $token
        ], 200)
        ->header('X-Custom-Header', 'MyCustomValue')
        ->cookie('user_token', $token, 60); 
    }

    public function destroyUserToken(Request $request): JsonResponse
    {
        return response()->json([
            'message' => 'Token destroyed'
        ])->withCookie(Cookie::forget('user_token'));
    }
}
