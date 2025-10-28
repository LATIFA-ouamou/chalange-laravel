<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function index()
    {
        return Profile::with('user')->get();
    }



    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'bio' => 'required|string',
            'avatar' => 'nullable|string',
        ]);

        $profile = Profile::create($request->all());

        return response()->json($profile, 201);
    }
}
