<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function show() {
        return view('auths.profile');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
