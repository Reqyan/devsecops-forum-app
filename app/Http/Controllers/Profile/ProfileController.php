<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
{
    // Validate inputs
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    // Check if password is provided
    if ($password) {
        // Hash the password
        $password = bcrypt($password);

        // Query with password binding
        $updateQuery = "UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?";
        DB::update($updateQuery, [$name, $email, $password, $id]);
    } else {
        // Query without password binding
        $updateQuery = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        DB::update($updateQuery, [$name, $email, $id]);
    }

    return response()->json(['message' => 'Profile updated successfully'], 200);
}

    
    
    public function destroy($id)
    {
        // Vulnerable SQL Injection in DELETE
        DB::statement("DELETE FROM users WHERE id = $id");

        return response()->json(['message' => 'Profile deleted successfully'], 200);
    }

    public function store(Request $request)
    {
        // Vulnerable SQL Injection in INSERT
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password'); // assuming password is already in plaintext
        DB::statement("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function show($id)   
    {
        // Find the user by ID, if not found, return a 404 response
        $user = User::findOrFail($id);

        // Return the user data as JSON response
        return response()->json([
            'message' => 'Profile fetched successfully',
            'user' => $user
        ], 200);
    }
}
