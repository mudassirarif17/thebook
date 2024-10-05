<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\bookrequest;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/add_author' , [AdminController::class , 'add_author']);
Route::post('/upload_author' , [AdminController::class , 'upload_author']);
Route::get('/delete_author/{id}' , [AdminController::class , 'delete_author']);
Route::get('/edit_author/{id}' , [AdminController::class , 'edit_author']);
Route::post('/update_author/{id}' , [AdminController::class , 'update_author']);
Route::get('/all_author' , [AdminController::class , 'all_author']);
Route::get('/all_books' , [AdminController::class , 'all_books']);
Route::get('/all_req' , [AdminController::class , 'all_req']);
Route::get('/app_req/{id}' , [AdminController::class , 'app_req']);
Route::get('/cancel_req/{id}' , [AdminController::class , 'cancel_req']);




Route::get('/add_book' , [AuthorController::class , 'add_book']);
Route::post('/upload_book' , [AuthorController::class , 'upload_book']);
Route::post('/update_book/{id}' , [AuthorController::class , 'update_book']);
Route::get('/all_author_books/{name}' , [AuthorController::class , 'all_books']);
Route::get('/delete_author_book/{id}' , [AuthorController::class , 'delete_book']);
Route::get('/edit_author_book/{id}' , [AuthorController::class , 'edit_book']);



Route::get('/all_user_req/{name}' , [UserController::class , 'all_user_req']);
Route::get('/book_request/{b_id}' , [UserController::class , 'book_request']);
Route::get('/cancel_request/{b_id}' , [UserController::class , 'cancel_request']);





Route::get('/', function () {
    $book = Book::all();
    $bookrequest = bookrequest::all();
    return view('user.index' , compact('book' , 'bookrequest'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::id()){
            if(Auth::User()->usertype == '0'){
                $book = Book::all();
                $bookrequest = bookrequest::all();
                return view('user.index' , compact('book' , 'bookrequest'));
            }
            elseif(Auth::User()->usertype == '1'){
                return view('author.index');
            }else{
                return view('admin.index');
            }
        }else{
            return redirect()->back();
        }
    })->name('dashboard')->middleware('auth' , 'verified');
});
