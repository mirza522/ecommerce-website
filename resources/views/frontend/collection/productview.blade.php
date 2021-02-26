@extends('layouts.frontend')

@section('content')


<section class="py-5">

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-12 mb-3">

					<div class="product_data">
					<div class="row">
						<div class="col-md-5">
							<div class="border">
							  <img src="{{asset('uploads/productimage/'.$product->image)}}" class="w-100" alt="">	
								
							</div>
							
						</div>
						<div class="col-md-7">
							<div class="py-2">
								<small class="text-gray mb-o">collectionss/{{$product->trial->category->group->name}}</small>
								
							</div>
							<div class="product-heading py-2 border-top">
								<h5 class="font-weight-bold mb-o">{{$product->name}}</h5>
								
							</div>
							<div class="py-2">
								
								<small ><i class="fa fa-star text-warning"></i></small><small ><i class="fa fa-star text-warning"></i></small>
								<small ><i class="fa fa-star text-warning"></i></small>
								<small ><i class="fa fa-star text-warning"></i></small>
								<small ><i class="fa fa-star text-warning"></i></small>
								<small class="font-italic badge badge-primary ml-3 px-2">{{$product->sale_tag}}</small>
								
							</div>
							<div class="product-price"> 
								<h5>
									<span class="offer-price">Rs:{{number_format($product->offer_price	)}} </span>
									<span class="offer-price"> <s>Rs:{{number_format($product->original_price	)}}</s></span>
									
								</h5>
							
						</div>

						<div class="py-3">
							<div class="row">
								<div class="col-md-2 col-3">
									<input type="hidden" class="product_id" value="{{ $product->id}}">
									<input type="number" class="qty-input form-control" value="1" min="1" max="100"/>
									
								</div>
								<div class="col-md-6 col-6">
									<button type="button" class="add-to-cart-btn btn btn-danger btn-btn m-0 py-2 px-3">Add to Cartsss</button>
									
								</div>
								
							</div>
							
						</div>
						<div class="product-small-description py-2 border-top">
							!!{{ $product->small_description}}
						</div>
					</div>
					<div class="col-md-12">

						<div class="product-highlights py-2 border-top">
							<div class="card">
								<div class="card-header">
									<h6 class="highlight-heading mb-0 font-weight-bold">{{$product->p_highlight_heading}}</h6>
									
								</div>

								<div class="card-body">
									{{ $product->p_highlights }}
									
								</div>
								
							</div>
							
						</div>

						<div class="product-description py-2 border-top">
							<div class="card">
								<div class="card-header">
									<h6 class="highlight-heading mb-0 font-weight-bold">{{!! $product->p_description_heading}}</h6>
									
								</div>

								<div class="card-body">
									{{ $product->p_description }}
									
								</div>
								
							</div>
							
						</div>
						
						<div class="card">
								<div class="card-header">
									<h6 class="highlight-heading mb-0 font-weight-bold">{{!! $product->p_details_heading}}</h6>
									
								</div>

								<div class="card-body">
									{{ $product->p_details }}
									
								</div>
								
							</div>
					</div>
				</div>

				</div>
				
			</div>
			
		</div>
		
	</div>
	


</div>
	
</section>





@endsection