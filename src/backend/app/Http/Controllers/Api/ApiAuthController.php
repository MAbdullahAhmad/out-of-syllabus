<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApiAuthController extends Controller {
    
    /**
     * Login user with credentials
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request) {
        // dd($request->only('email', 'password'));

        if (!Auth::guard('web')->attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login details'], 401);
        }

        // Get User
        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        // Base Table Data
        $user_data = [
            'name'            => $user->name,
            'first_name'      => $user->first_name,
            'last_name'       => $user->last_name,
            'middle_name'     => $user->middle_name,
            'username'        => $user->username,
            'email'           => $user->email,
            'profile_picture' => $user->profile_picture,
            'role'            => $user->role,
            'is_admin'        => $user->is_admin(),
            'is_customer'     => $user->is_customer(),
        ];

        // Admin Data (conditional)
        if($user->is_admin()){
            $admin = $user->admin()->firstOrFail();
            $user_data['nick'] = $admin->nick;
        }

        // Customer Data (conditional)
        elseif($user->is_customer()){
            $customer = $user->customer()->firstOrFail();
            $user_data['nick'         ] = $admin->nick;
            $user_data['date_of_birth'] = $admin->date_of_birth;
        }

        dd($user_data, $token);

        return response()->json([
            'token' => $token,
            'user'  => $user_data,
        ]);

    }
    

    /**
     * Logout logged in user
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'You have been logged out'
        ], 200);
    }


    /**
     * Get logged in user
     *
     * @param Request $request
     * @return void
     */
    public function check(Request $request) {
        return response()->json([
            'authenticated' => true,
        ], 200);
    }


    /**
     * Get logged in user
     *
     * @param Request $request
     * @return void
     */
    public function user(Request $request) {
        return response()->json([
            'user' => $request->user()
        ], 200);
    }
}
