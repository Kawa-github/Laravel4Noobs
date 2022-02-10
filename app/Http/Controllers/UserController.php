<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile(string $username){
        return view('users', compact('username'));
    }

    public function getMeProfile(){
        $username = 'Kawã';
        return redirect(route('user-info', ['username' => 'kawa']));
    }

    public function testing(Request $request){
        $this->validate($request, [
            'name' => 'required|exists:users',//
            'age' => 'required|numeric|unique:users,age' 
        ]);
    }

    public function teste(){
        //   return response()->json(['name' => 'Kawã Ribeiro']);
        return redirect(route('user-profile', ['username' => 'kawa']));
    }

    public function getInformations(){
        $info = [
        'name' => 'Kawa',
        'age' => 18,
        'height' => 1.70,
        'work' => true
        ];
        // return redirect(route('user-profile', ['username' => 'kawa']));
        return $info;
    }
}
