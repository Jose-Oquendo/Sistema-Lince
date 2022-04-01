<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function store(){
        $this->validate(request(), [
            'password' => 'required|confirmed',
        ]);
        $user = User::create(request(['name','last_name','password', 'email']));
        auth()->login($user);
        return redirect()->route('home');
    }
}
