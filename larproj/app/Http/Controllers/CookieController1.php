<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController1 extends Controller
{
    public function setCookie(Request $request) {
        $minutes = 1;
        $response = new Response('Hello World');
        $name = $request->input('name');
        $password = $request->input('password');
        $response->withCookie(cookie('name', $name, $minutes))->withCookie(cookie('password', $password, $minutes));
        return $response;
     }
     public function getCookie(Request $request) {
        $cookie1 = $request->cookie('name');
        $cookie2 = $request->cookie('password');
        echo "Cookie set by you is : ".$cookie1 ." and ".$cookie2; 
     }

}
