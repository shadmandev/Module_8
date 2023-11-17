<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id = NULL){
        $name   = "Donal Trump";
        $age    = "75";

        $data = [
            $id,
            $name,
            $age,
        ];
        // Set Cookies
        $cookiename = "My_Cookie";
        $value = "Name is {$name} and Age is {$age}";
        $minutes = 60;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = true;
        $httpOnly = true;

        return response($data, 200)->cookie($cookiename,$value,$minutes,$path,$domain,$secure,$httpOnly);
    }
}
