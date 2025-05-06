<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index($name=Null)
    {
        return view('items', compact('name'));
    }

    public function index1()
    {
        $itemname = "pant";
        return view('items', compact('itemname'));
    }

    public function index2($itemname='shirt')
    {
        return view('items', compact('itemname'));
    }

    public function index3($itemname='shirt')
    {
        return view('items', ['itemname'=>$itemname]);
    }
    
    public function index4($itemname)
    {
        return view('items', ['itemname'=>$itemname]);
    }
}
