<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller
{
    public function login(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');

        $users = DB::select('select * from admin');
 
    foreach ($users as $user) {
    $userEmail = $user->userEmail;
    $userPassword = $user->userPassword;
    $userName = $user->userName;
        }

        if($email == $userEmail && $password == $userPassword) {

            session(['userName' => $userName]);

            return view('welcome', ['userName' => $userName]);

        } else {

            $error = true;

            return view('login', ['error' => $error]);
        }

        

    }

    public function logout(Request $request) {

        $request->session()->forget('userName');
        return view('welcome');

    }

    public function createmenu() {

        

    }

}
