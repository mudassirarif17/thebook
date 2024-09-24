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
                <h1 class="text-center display-5">Add Author</h1>
                <form action="/upload_author" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-3">
                        <input type="text" placeholder="Author Name" name="name" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input type="email" placeholder="Author Email" name="email" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input type="tel" placeholder="Author Phone" name="phone" class="form-control border border-danger">
                    </div>
                    <div class="my-3">
                        <input type="file" class="form-control border border-danger" name="image">
                    </div>
                    <div class="my-3">
                        <textarea name="address" placeholder="Address" class="form-control border border-danger" name="" id="" cols="30" rows="6"></textarea>
                    </div>
                    <div class="my-3">
                       <button class="btn btn-danger">Add Author</button>
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