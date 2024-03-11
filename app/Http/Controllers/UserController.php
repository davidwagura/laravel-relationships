<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view() {
        $data= User::find(1);
        return view('User.view', compact('data'));
    }
}
