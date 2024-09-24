@include('admin.header')
@include('admin.spinner')
    
        <!-- Spinner End -->


        <!-- Sidebar Start -->
       @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           @include('admin.navbar')
            <!-- Navbar End -->


            <div class="container  my-3">
                <h1 class="text-center display-5">All Author</h1>
                <div>
                    <input id="inp" type="text" placeholder="Search Here" class="form-control border border-danger">
                </div>
                <table class="table my-3 border table-bordered border-danger">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($author as $a)
                        @if($a->usertype == 1)
                        <tr>
                            <td>{{$a->id}}</td>
                            <td>{{$a->name}}</td>
                            <td>{{$a->email}}</td>
                            <td>{{$a->phone}}</td>
                            <td><img style="height: 50px;" class="rounded-circle" src="{{url('authorimage' , $a->image)}}"></td>
                            <td class="d-flex gap-2"><a onclick="return confirm('Are you Sure ?')"  href="{{url('/delete_author' , $a->id)}}" class="btn btn-primary">Delete</a><a href="{{url('/edit_author' , $a->id)}}" class="btn btn-primary">Edit</a></td>
                        </tr>
                        @endif
                        
                        @endforeach
                    </tbody>
                </table>
                {{$author->links()}}
            </div>


            <!-- Footer Start -->
            @include('admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('admin.script')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#inp').on("keyup" , function(){
                var inp = $('#inp').val().toUpperCase();
                $('table tbody tr').filter(function(){
                    $(this).toggle($(this).text().toUpperCase().indexOf(inp) > -1)
                })

            })
        })
    </script>

    
    