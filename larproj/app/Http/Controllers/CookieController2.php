<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController2 extends Controller
{
   public function setCookie(Request $request) 
   {
      return Cookie::queue(Cookie::make('name', 'Navneet', 1));
   }
   public function getCookie(Request $request) 
   {
      return Cookie::get('name');
   }
   public function deleteCookie(Request $request)
   {
      return Cookie::expire('name');
   }
}
