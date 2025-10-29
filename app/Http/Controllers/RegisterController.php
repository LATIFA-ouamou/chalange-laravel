<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
     public function showForm()
    {
        return view('register');
    }

      public function handleForm(RegisterRequest $request)
    {
    //     // Validation
    //    $request->validate([
    //         'name' => 'required|min:3',
    // 'email' => 'required|email|unique:users,email',
    // 'password' => 'required|min:6'
    
    //     ]);
    $request->validated(); 
       return redirect()->back()->with('success', 'Inscription réussie !');
}
}