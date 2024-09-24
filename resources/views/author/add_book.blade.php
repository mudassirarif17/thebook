@include('author.header')
@include('author.spinner')
@include('author.sidebar')

<div class="content">
    @include('author.navbar')


    <div class="container w-50 my-5">
        <h1 class="display-5 text-center">Add Book</h1>
        <form action="/upload_book" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="text" placeholder="Book Title" name="book_title" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <textarea name="book_desc" placeholder="Book Description" class="form-control border border-danger" name="" id="" cols="30" rows="4"></textarea>
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
                       <button class="btn btn-danger">Add Book</button>
                    </div>
                </form>
    </div>


    @include('author.footer')
</div>

@include('author.script')