<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class QueryController extends Controller
{
    public function query()
    {
        // $result = DB::table('users')->get();
        // return view('query', ['result' => $result]);

        $result = DB::table('users')->insert([
            'name' => 'saini',
            'email' => 'saini@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        return $result ? " Data inserted successfully." : " Data insertion failed.";
    }

    public function show()
    {
        $result = DB::table('users')->get();
        return view('query', ['result' => $result]);
    }
}
