<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController1 extends Controller
{
    public function getSessionData(Request $request)
    {
       return Session::get('user_id');
    }
    public function storeSessionData(Request $request)
    {
        return Session::put('user_id', 1);
    }
    public function deleteSessionData(Request $request)
    {
        return Session::forget('user_id');
    }
}
/*
forget: Removes a specific item from the session.
pull: Retrieves and removes an item from the session, with an optional default value.
flush: Clears all session data completely.*/