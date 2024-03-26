<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HolaneController extends Controller
{
    public function holane(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $users = User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password
        ]);

        return view('login');
    }

    public function index(){
        $users = User::all();
        return view('users', ['users'=>$users]);
    }

    public function upform($id){
        $user = User::find($id);
        return view('userform', ['user'=>$user]);
    }

    public function update(Request $request){
       $id = $request->id;
       $name = $request->name;
       $email = $request->email;

       $user = User::find($id);
       $user->name = $name;
       $user->email = $email;
       $user->save();
       $users = User::all();
       return view('users', ['users'=>$users]);
    }
}