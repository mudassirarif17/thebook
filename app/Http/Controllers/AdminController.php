<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bookrequest;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function add_author(){
        if(Auth::User()->usertype == '2'){
            return view('admin.add_author');
        }else{
            return redirect()->back();
        }
    }

    public function upload_author(Request $request){
        if(Auth::User()->usertype == '2'){
            $author = new User();

            $image = $request->image;
            $imagename = time().''.$image->getClientOriginalExtension();
            $request->image->move('authorimage' , $imagename);
            $author->image = $imagename;

            $author->name = $request->name;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $author->address = $request->address;
            $author->usertype = "1";
            $author->password = bcrypt("123456789");
            $author->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        

    }

    public function all_author(){
        // $author = User::all();
        if(Auth::User()->usertype == '2'){
            $author = User::paginate(5);
            return view('admin.all_author' , compact('author'));
        }else{
            return redirect()->back();
        }
    }

    public function delete_author($id){
        if(Auth::User()->usertype == '2'){
            $author = User::find($id)->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function edit_author($id){
        if(Auth::User()->usertype == '2'){
            $author = User::find($id);
            return view('admin.edit_author' , compact('author'));
        }else{
            return redirect()->back();
        }
    }

    public function update_author(Request $request , $id ){
        if(Auth::User()->usertype == '2'){
            $author = User::find($id);

            $image = $request->image;
            $imagename = time().''.$image->getClientOriginalExtension();
            $request->image->move('authorimage' , $imagename);
            $author->image = $imagename;
    
            $author->name = $request->name;
            $author->email = $request->email;
            $author->phone = $request->phone;
            $author->address = $request->address;
            $author->save();
            return redirect('/all_author');
        }else{
            return redirect()->back();
        }
       
    }

    public function all_books(){
        if(Auth::User()->usertype == '2'){
            return view('admin.all_books');
        }else{
            return redirect()->back();
        }
    }

    public function all_req(){
        $all_requests = bookrequest::all();
        return view('admin.all_req' , compact('all_requests'));
    }

    public function app_req($id){
        $all_requests = bookrequest::find($id);
        $all_requests->status = "Approved";
        $all_requests->save();
        return redirect()->back();
    }

    public function cancel_req($id){
        $all_requests = bookrequest::find($id);
        $all_requests->status = "Canceled";
        $all_requests->save();
        return redirect()->back();
    }


}
