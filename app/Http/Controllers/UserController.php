<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

      
        // 
// $data['password'] = bcrypt($data['password']);
        // Création du user
        $user = User::create($data);

        return response()->json($user, 201);
    }
}
