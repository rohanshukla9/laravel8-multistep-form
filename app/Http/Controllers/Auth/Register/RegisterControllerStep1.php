<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterControllerStep1 extends Controller
{
    //

    public function index()
    {
        # code...
        return view('auth.register.1');
    }
}
