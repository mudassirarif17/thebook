<section class="ftco-section ftco-no-pt">
    	<div class="container-fluid px-md-4">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Books</span>
            <h2>New Release</h2>
          </div>
        </div>
    		<div class="row">
				@foreach($book as $b)
				<div class="col-md-6 col-lg-4 d-flex">
    				<div class="book-wrap d-lg-flex">
    					<div class="img d-flex justify-content-end" style="background-image: url({{url('./bookimage' , $b->image)}})">
    						<div class="in-text">
    							<a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to cart">
    								<span class="flaticon-shopping-cart"></span>
    							</a>
    							<a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
    								<span class="flaticon-heart-1"></span>
    							</a>
    							<a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Quick View">
    								<span class="flaticon-search"></span>
    							</a>
    							<a href="#" class="icon d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="left" title="Compare">
    								<span class="flaticon-visibility"></span>
    							</a>
    						</div>
    					</div>
    					<div class="text p-4">
    						<p class="mb-2"><span class="price">${{$b->price}}</span></p>
    						<h2><a href="#">{{$b->book_title}}</a></h2>
    						<span class="position">By {{$b->author}}</span>
							@if($b->price === "free")
							<a target="_blank" href="{{url('./bookfile' , $b->file)}}" class="btn btn-secondary">Read Book</a>
							@else
								@if(Auth::id())
									@php
										$hasApprovedRequest = false;
										$hasPendingRequest = false;
									@endphp
									@foreach($bookrequest as $br)
										@if($br->userId == Auth::id())
										@if($br->bookId == $b->id && $br->status == "Approved")
											@php
												$hasApprovedRequest = true;
											@endphp
											@break
										@elseif($br->bookId == $b->id && $br->status == "Pending")
											@php
												$hasPendingRequest = true;
											@endphp
											@break
										@endif
										@endif
									@endforeach
									@if($hasApprovedRequest)
										<a target="_blank" href="{{url('./bookfile' , $b->file)}}" class="btn btn-secondary">Read Book</a>
									@elseif($hasPendingRequest)
									<p>Your Request is Pending</p>
									<a href="{{url('/cancel_request' , $b->id)}}" class="btn btn-secondary">Cancel request</a>
									@else
									<a href="{{url('/book_request' , $b->id)}}" class="btn btn-secondary">Order Book</a>
									@endif
								@else
									<a href="/login" class="btn btn-secondary">Please Authenticate</a>
								@endif
							@endif
    					</div>
    				</div>
    			</div>
				@endforeach
    			
    			
    		</div>
    	</div>
    </section>