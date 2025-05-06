<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatbaseController extends Controller
{
    //
    function users(){
        // return DB::select('select * from users');
        // return view('users');
        $users= DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}
