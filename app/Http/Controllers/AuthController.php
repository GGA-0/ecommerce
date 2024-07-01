<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request) {
        return view("Login");
    }

    
    function logout(Request $request) {
        return "Logout";
    }

}