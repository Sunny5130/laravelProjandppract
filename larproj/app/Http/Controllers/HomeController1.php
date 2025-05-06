<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController1 extends Controller
{
    public function index(){
        $message = $this->privateMethod();
        return $message;
    }

    // Private method, only accessible within the class
    private function privateMethod(){
        return 'This is a private method';
    }
}
