<?php

namespace App\Http\Controllers\Auths;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // protected function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function show() {
        return view('auths.profile');
    }
}
