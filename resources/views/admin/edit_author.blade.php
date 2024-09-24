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

            <div class="container w-50 my-3">
                <h1 class="text-center display-5">Edit Author</h1>
                <form action="{{url('/update_author' , $author->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input value="{{$author->name}}" type="text" placeholder="Author Name" name="name" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input value="{{$author->email}}" type="email" placeholder="Author Email" name="email" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input value="{{$author->phone}}" type="tel" placeholder="Author Phone" name="phone" class="form-control border border-danger">
                    </div>
                    <div class="my-3  d-flex justify-content-center">
                        <img class="rounded-circle" style="height : 100px" src="{{url('./authorimage' , $author->image)}}" alt="">
                    </div>
                    <div class="my-3">
                        <input type="file" class="form-control border border-danger " name="image">
                    </div>
                    <div class="my-3">
                        <input value="{{$author->address}}" type="tel" placeholder="Author Phone" name="address" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                       <button class="btn btn-danger">Update Author</button>
                    </div>
                </form>
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