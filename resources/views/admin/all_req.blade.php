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
                <h1 class="text-center display-5">All Request</h1>
                <div>
                    <input id="inp" type="text" placeholder="Search Here" class="form-control border border-danger">
                </div>
                <table class="table my-3 border table-bordered border-danger">
                    <thead>
                        <tr>
                            <th>Request Id</th>
                            <th>user Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Book Id</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_requests as $ar)
                        <tr>
                            <td>{{$ar->id}}</td>
                            <td>{{$ar->userName}}</td>
                            <td>{{$ar->userEmail}}</td>
                            <td>{{$ar->userPhone}}</td>
                            <td>{{$ar->bookId}}</td>
                            <td>{{$ar->status}}</td>
                            <td><a class="btn btn-sm btn-primary mx-1" href="{{url('/app_req' , $ar->id)}}">Approved</a>
                            <a class="btn btn-sm btn-primary" href="{{url('/cancel_req' , $ar->id)}}">Canceled</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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

    
    