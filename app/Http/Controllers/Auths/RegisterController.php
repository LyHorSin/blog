<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auths.register');
    }

    public function store(Request $request) {

        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users|max:20',
            'password' => 'required'
        ]);
        $user = $request->all();
        User::create([
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'email' => $user['email'],
            'phone_number' => $user['phone_number'],
            'password' => encrypt($user['password']) 
        ]);
        return redirect('/');
    }
}