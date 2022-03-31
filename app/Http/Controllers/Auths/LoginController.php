<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return redirect('/');
    }
}
