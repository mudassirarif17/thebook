@include('author.header')
@include('author.spinner')
@include('author.sidebar')

<div class="content">
    @include('author.navbar')


    <div class="container w-75 my-5">
        <h1 class="display-5 text-center">All Books</h1>
        <table class="table border table-bordered border-danger">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($book as $b)
                <tr>
                    <td>{{$b->id}}</td>
                    <td>{{$b->book_title}}</td>
                    <td>{{$b->book_desc}}</td>
                    <td>{{$b->author}}</td>
                    <td>{{$b->price}}</td>
                    <td><img style="height: 50px;" src={{url('./bookimage' , $b->image )}} alt=""></td>
                    <td><a target="_blank" href={{url('./bookfile' , $b->file )}} class="btn btn-primary btn-sm" >Read Book</a></td>
                    <td><a href={{url('/edit_author_book' , $b->id )}} class="btn btn-sm btn-primary mx-1" href="">Edit</a><a onclick="return confirm('Are You Sure ?')" class="btn btn-sm btn-primary" href={{url('/delete_author_book' , $b->id)}}>Delete</a></td>
                </tr>
                @endforeach
                
            </tbody>
        </table>        
    </div>


    @include('author.footer')
</div>

@include('author.script')