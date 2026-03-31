<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function show()
    {

        // dd('ESTOU SAINDO NO CONTROLLADOR');

        return view('auth.home');
    }
}
