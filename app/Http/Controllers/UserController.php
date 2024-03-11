<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(){
        $data= Post::all()->where("user_id", "1");       
        $data= User::find(1);
        return view('User.view', compact('data'));
    }

    // public function show(){
    //     $data= Post::all()->where("user_id", "1");
    //     return view('User.one-to-many', compact('data'));
    // }
}