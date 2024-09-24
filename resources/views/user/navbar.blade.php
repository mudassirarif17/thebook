<div class="container-fluid px-md-5  pt-4 pt-md-5">
	<div class="row justify-content-between">
		<div class="col-md-8 order-md-last">
			<div class="row">
				<div class="col-md-6 text-center">
					<a class="navbar-brand" href="index.html">Publishing <span>Company</span> <small>Book Publishing Company</small></a>
				</div>
				<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
					<form action="#" class="searchform order-lg-last">
						<div class="form-group d-flex">
							<input type="text" class="form-control pl-3" placeholder="Search">
							<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 d-flex">
			<div class="social-media">
				<p class="mb-0 d-flex">
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
					<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				</p>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container-fluid">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav m-auto">
				<li class="nav-item active"><a href="/dashboard" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
				<li class="nav-item"><a href="coming-soon.html" class="nav-link">Coming Soon</a></li>
				<li class="nav-item"><a href="top-seller.html" class="nav-link">Top Seller</a></li>
				<li class="nav-item"><a href="book.html" class="nav-link">Books</a></li>
				<li class="nav-item"><a href="author.html" class="nav-link">Author</a></li>
				<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				

				@if(Auth::id())
				<li class="nav-item"><a href={{url('/all_user_req' , Auth::user()->name)}} class="nav-link">Your Requests</a></li>
				<li class="nav-item">
					<x-app-layout>
					</x-app-layout>
				</li>
				@else

				<li class="nav-item"><a href="/register" class="nav-link">Register</a></li>
				<li class="nav-item"><a href="/login" class="nav-link">Login</a></li>

				@endif



			</ul>
		</div>
	</div>
</nav>
<!-- END nav -->