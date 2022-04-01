<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create() {
        return view('auths.login');
    }

    public function store(Request $request) {
        $request->validate([
            'phone_number' => 'required|max:30',
            'password' => 'required'
        ]);

        $user = User::all()->where('phone_number', 'password' ,$request['phone_number'], $request['password'])->first();
        Auth::login($user);
        return redirect('/');
    }
}
