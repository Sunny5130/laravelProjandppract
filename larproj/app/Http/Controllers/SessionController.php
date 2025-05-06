<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function storeSessionData(Request $request)
    {
       $request->session()->put('name','lpu');
       // $request->session()->put(["ID"=>123,"occupation"=>"Asst Prof"]);
        //session(["ID"=>123,"occupation"=>"Asst Prof"]);
        //$request->session()->push('address', 'lpu');
        echo "Data has been added to the session";
    }
    public function getSessionData(Request $request)
    {
            // return $request->session()->all();
            echo $request->session()->get('name');
            echo session('name');

            // if($request->session()->has('name'))
            // {
            //     echo $request->session()->get('name');
            //     echo "<br>"; 
            // }
            //  else
            // {
            //     echo $request->session()->get('something', 'default');
            //     echo 'No data in the session'; 
            // }

            // if ($request->session()->exists('name')) 
            // {
            //     echo "exists";
            // }
            // else
            // {
            //     echo "no session data exists";
            // }
    }
   
    public function deleteSessionData(Request $request)
    {
        //$request->session()->forget('name');
        //$request->session()->forget(['ID','occupation']);
        $request->session()->flush();
        //$request->session()->pull('ID', 123);
        echo "Data has been removed from the session";
    }
}
/*
forget: Removes a specific item from the session.
pull: Retrieves and removes an item from the session, with an optional default value.
flush: Clears all session data completely.*/