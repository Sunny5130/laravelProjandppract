<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController1 extends Controller
{
    //

    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $path = $file->store('avatars'); // Store in storage/app/avatars
            $originalName = $file->getClientOriginalName();
            $mimeType = $file->getMimeType();

            return "File uploaded to: $path, Original Name: $originalName, Mime Type: $mimeType";
        }

        return "No file uploaded.";
    }
}
