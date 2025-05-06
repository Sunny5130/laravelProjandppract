<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UploadController extends Controller{
    public function upload(Request $request){
    if ($request->hasFile('file')) {
        $path = $request->file('file')->store('images', 'public');

        return view('display', ['path' => $path]);
    }
    return back()->with('error', 'No file selected');
}
}

