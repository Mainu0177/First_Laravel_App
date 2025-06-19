<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function UserRegistration(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        return response()->json([
            $name,
            $email,
            $password,
        ]);
    }//end method

    public function DemoPerson($name, $age)
    {
        return response()->json([
            'Name' => $name,
            'Age' => $age
        ]);
    }//end method

    public function URLParam(Request $request)
    {
        $name = $request->query('name');
        return "Hello " . $name;
    }
}
