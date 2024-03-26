<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        
    }

    public function holane(Request $request){
        User::create(['name'=>'Holane', 'email'=>'holane@gmail.com', 'password'=>'123456789']);
        return "User create successfully";
    }
}