<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\bookrequest;
use App\Models\Book;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all_user_req(){
        return view('user.all_user_req');
    }

    public function book_request(Request $request , $b_id){
        $b_req = new bookrequest();
        $b_req->userId = Auth::User()->id;
        $b_req->userName = Auth::User()->name;
        $b_req->userEmail = Auth::User()->email;
        $b_req->userPhone = Auth::User()->phone;
        $b_req->bookId = $b_id;
        $b_req->status = "Pending";

        $b_req->save();
        return redirect()->back();

    }

    public function cancel_request($b_id){
        $bookrequest = bookrequest::find($b_id)->delete();
        return redirect()->back();
    }

}
