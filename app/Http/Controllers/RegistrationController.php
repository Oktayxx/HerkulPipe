<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'name' => 'required|min:6',
        ]);

        try {
            // Create the user
            $user = User::create([
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'name' => $validatedData['name'],
            ]);

            // Check if the user was created successfully
            if ($user) {
                return response()->json([
                    'message' => 'User registered successfully'
                ], 201); // 201 Created status
            }

            // If user creation fails, return an error response
            return response()->json([
                'message' => 'User registration failed'
            ], 500); // 500 Internal Server Error

        } catch (\Exception $e) {
            // Handle unexpected exceptions
            return response()->json([
                'message' => 'An error occurred during registration',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
