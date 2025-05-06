<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $req)
    {
        return "<h1>Hi!!! I am $req->id</h1>";
    }
}
