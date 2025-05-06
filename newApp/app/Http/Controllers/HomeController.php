<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller{
    public function index(Request $request){
        $name = 'Sunny'; 
        $cookie = cookie('user_name', $name, 1440); // 1440 minutes = 1 day

        return response()->view('home')->cookie($cookie);
    }

    public function deleteCookie(Request $request){
        return response()->redirectTo('/')->withCookie(Cookie::forget('user_name'));
    }
}
