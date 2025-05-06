<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function addUser(Request $request)
    {
        $request->validate([
            'username'  => 'required|min:3|max:10|regex:/^[a-zA-Z]+$/',
            'email'     => 'required|email',
            'city'      => 'required',
            'password'  => 'required|min:8|max:20|confirmed',
        ]);

        return $request;
    }
}
