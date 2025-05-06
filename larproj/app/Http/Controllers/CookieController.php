<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request) 
    {
        $minutes = 1;
        $response = new Response('Cookie is set');
      //   $response->withCookie(cookie('name', 'lpu', $minutes));
        $response->cookie('name', 'lpu', $minutes);
        return $response;
      }

     public function getCookie(Request $request) 
     {
      $value = $request->cookie('name');
      echo $value;
     }

     public function deleteCookie(Request $request) {
      $response = new Response("Cookie deleted successfully");
      $response->cookie('name', null, 0);
      // $response->withCookie('name');
      return $response;
   }
}
