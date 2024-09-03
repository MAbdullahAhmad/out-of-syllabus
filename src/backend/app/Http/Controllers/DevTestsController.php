<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevTestsController extends Controller{
    
    /**
     * Login user with credentials
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request) {

        // dd(Auth::guard('api')->attempt());

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user'  => $user,
        ]);

    }
    
}
