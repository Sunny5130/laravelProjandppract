<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $req)
    {
        if (empty($req->input('user')) || empty($req->input('password'))) {
            return redirect('login');
        }
        $req->session()->put('data', $req->input());
        if($req->session()->has('data')) {
            return redirect('profile');
        }
    }
}
