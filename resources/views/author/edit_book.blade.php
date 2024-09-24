@include('author.header')
@include('author.spinner')
@include('author.sidebar')

<div class="content">
    @include('author.navbar')


    <div class="container w-50 my-5">
        <h1 class="display-5 text-center">Edit Book</h1>
        <form action="{{url('/update_book' , $book->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input value="{{$book->book_title}}" type="text" placeholder="Book Title" name="book_title" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input value="{{$book->book_desc}}" type="text" placeholder="Book Description" name="book_desc" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <label class="mb-2" for="">Book Image</label>
                        <input type="file" class="form-control border border-danger" name="image">
                    </div>
                    <div class="my-3">
                        <label class="mb-2" for="">Book File</label>
                        <input type="file" class="form-control border border-danger" name="file">
                    </div>
                    <div class="my-3">
                        <input type="text" placeholder="Book Price" name="price" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                       <button class="btn btn-danger">Update Book</button>
                    </div>
                </form>
    </div>


    @include('author.footer')
</div>

@include('author.script')