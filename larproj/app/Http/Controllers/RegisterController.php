<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function register(Request $request)
    {
        $username = $request->input('username'); // Or $request->username; or request('username');
        $email = $request->email;
        $password = $request->input('password');
        $agree = $request->boolean('agree');

        $onlyData = $request->only(['username', 'email']);
        $exceptData = $request->except(['password', '_token']); // _token is Laravel's CSRF token

        // Validation (important in real apps!)
        if (empty($username) || empty($email) || empty($password)) {
            return "Please fill in all fields.";
        }

        // Process registration (e.g., store in database)
        // ...

        return "Username: $username, Email: $email, Agree: " . ($agree ? 'yes' : 'no') . ", only data: " . json_encode($onlyData) . ", except data: " . json_encode($exceptData);
    }

}
