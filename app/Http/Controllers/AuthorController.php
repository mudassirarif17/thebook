<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function upload_book(Request $request){
        $book = new Book();

        $image = $request->image;
        $imagename = time().''.$image->getClientOriginalExtension();
        $request->image->move('bookimage' , $imagename);
        $book->image = $imagename;

        $file = $request->file;
        $filename = time().''.$file->getClientOriginalExtension();
        $request->file->move('bookfile' , $filename);
        $book->file = $filename;

        $book->book_title = $request->book_title;
        $book->book_desc = $request->book_desc;
        $book->price = $request->price;
        $book->author = Auth::User()->name;
        $book->save();
        return redirect()->back();

    }


    public function add_book(){
        if(Auth::User()->usertype == '1'){
            return view('author.add_book');
        }else{
            return redirect()->back();
        }
    }


    public function delete_book($id){
        if(Auth::User()->usertype == "1"){
            $book = Book::find($id)->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        
    }

    public function edit_book($id){
        if(Auth::User()->usertype == "1"){
            $book = Book::find($id);
            return view('author.edit_book' , compact('book'));
        }else{
            return redirect()->back();
        }
    }

    public function update_book(Request $request , $id){
        if(Auth::User()->usertype == "1"){
        $book = Book::find($id);
        $image = $request->image;
        $imagename = time().''.$image->getClientOriginalExtension();
        $request->image->move('bookimage' , $imagename);
        $book->image = $imagename;

        $file = $request->file;
        $filename = time().''.$file->getClientOriginalExtension();
        $request->file->move('bookfile' , $filename);
        $book->file = $filename;

        $book->book_title = $request->book_title;
        $book->book_desc = $request->book_desc;
        $book->price = $request->price;
        $book->author = Auth::User()->name;
        $book->save();
        return redirect("/all_author_books/".Auth::User()->name);
        }else{
            return redirect()->back();
        }
    }

    
    public function all_books($name){
        if(Auth::User()->usertype == '1' && Auth::User()->name == $name){
            $book = Book::where('author' , $name)->get();
            return view('author.all_books' , compact('book'));
        }else{
            return redirect()->back();
        }
    }

}
