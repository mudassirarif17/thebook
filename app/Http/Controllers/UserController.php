<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_user_req(){
        return view('user.all_user_req');
    }
}
