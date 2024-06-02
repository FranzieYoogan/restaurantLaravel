<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function createmenu(Request $request) {

        $plate = $request->input('plate');
        $description = $request->input('description');
        $day = $request->input('day');
        $file = $request->file('file')->store('uploads', 'public');

        

       
        if($day != "Choose a day") { 
            
            $ok = true;
            DB::insert("insert into menu (plateName,plateDescription,plateImg,plateDay) values ('$plate','$description','$file','$day')");
         
            
            return view('createmenu', ['ok' => $ok]);

         } if($day == "Choose a day") {    

            $error = true;


            return view('createmenu', ['error' => $error]);

        }

    }

    public function getMenu(Request $request) {

        $day = $request->input('day');
        

        if($day == "monday") {


            $plates = DB::select("select * from menu where plateDay = 'monday' ");
 
    

        

        return view('menu', ['plates' => $plates]);

    } elseif( DB::select("select * from menu where plateDay = 'monday' ") == "") {

        $error = true;

        return view('menu', ['error' => $error]);

    }

        if($day == "tuesday") {


            $plates = DB::select("select * from menu where plateDay = 'tuesday' ");
 
    

        return view('menu', ['plates' => $plates]);

    } elseif( DB::select("select * from menu where plateDay = 'tuesday' ") == "") {

        $error = true;

        return view('menu', ['error' => $error]);

    }

        if($day == "wednesday") {


            $plates = DB::select("select * from menu where plateDay = 'wednesday' ");
 
    

        return view('menu', ['plates' => $plates]);

    } elseif( DB::select("select * from menu where plateDay = 'wednesday' ") == "") {

        $error = true;

        return view('menu', ['error' => $error]);

    }

        if($day == "thursday") {


            $plates = DB::select("select * from menu where plateDay = 'thursday' ");
 
    

        return view('menu', ['plates' => $plates]);

    } elseif( DB::select("select * from menu where plateDay = 'thursday' ") == "") {

        $error = true;

        return view('menu', ['error' => $error]);

    }

    if($day == "friday") {


        $plates = DB::select("select * from menu where plateDay = 'friday' ");

        foreach ($plates as $plate) {
            
            $plateName = $plate->plateName;
            $plateImg = $plate->plateImg;
            $plateDescription = $plate->plateDescription;
            $plateDay = $plate->plateDay;

    }

    return view('menu', ['plates' => $plates]);

} elseif( DB::select("select * from menu where plateDay = 'friday' ") == "") {

    $error = true;

    return view('menu', ['error' => $error]);

}

if($day == "saturday") {


    $plates = DB::select("select * from menu where plateDay = 'saturday' ");

    foreach ($plates as $plate) {
        
        $plateName = $plate->plateName;
        $plateImg = $plate->plateImg;
        $plateDescription = $plate->plateDescription;
        $plateDay = $plate->plateDay;

}

return view('menu', ['plates' => $plates]);

} elseif( DB::select("select * from menu where plateDay = 'saturday' ") == "") {

    $error = true;

    return view('menu', ['error' => $error]);

}

if($day == "sunday") {


    $plates = DB::select("select * from menu where plateDay = 'sunday' ");

    foreach ($plates as $plate) {
        
        $plateName = $plate->plateName;
        $plateImg = $plate->plateImg;
        $plateDescription = $plate->plateDescription;
        $plateDay = $plate->plateDay;

}

return view('menu', ['plates' => $plates]);

} elseif( DB::select("select * from menu where plateDay = 'sunday' ") == "") {


    $error = true;

    return view('menu', ['error' => $error]);

}
  
else {

    $error = true;

    return view('menu', ['error' => $error]);
}


    } 

    public function delete(Request $request) {

        $id = $request->input('id');

       DB::delete("delete from menu where id = '$id' ");

       return view('delete');

    }



}
