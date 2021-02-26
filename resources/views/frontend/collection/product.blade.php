@extends('layouts.frontend')

@section('content')



<div class="container card card-body">
	<div class="row">
		<div class="col-md-12">
				
			<label for="">collectionss/{{$subcategory->category->group->name}}/{{$subcategory->category->name}}/{{$subcategory->name}}</label>
			
		</div>
		
	</div>
	
</div>

  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				@foreach($product as $proditem)
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<div class="">
										<img src="{{asset('uploads/productimage/'.$proditem->image)}}" class="w-100" alt="">
										
									</div>
									
								</div>
								<div class="col-md-7 border-right border-left">
									<a href="">
									<h4>{{$proditem->name}}</h4>
									</a>
									<div class="">
										<h6 class="text-dark-mb-0">{{$proditem->p_highlights}}</h6>
										
									</div>

								</div>
								<div class="col-md-2">
									<div class="text-right">
					<h6 class="font-italic text-dark badge badge-warning px-3 py-2">{{$proditem->sale_tag}}</h6>
					<h6 class="font-italic"><s>Rs:{{number_format($proditem->original_price	)}}</s></h6>
					<h5 class="font-italic font-weight-bold">Rs:{{number_format($proditem->offer_price	)}}</h5>					

										
									</div>
										
									<div class="text-right">
										<div class="">
											<a href="{{url('collection/'.$proditem->trial->category->group->url.'/'.$proditem->trial->category->url.'/'.$proditem->trial->url.'/'.$proditem->url)}}" class="btn btn-outline-primary py-1 px-2">View Details</a>
											
											
										</div>
										
									</div>
								</div>

								
							</div>
							

						
					</div>
					
				</div>

			@endforeach
			</div>
			
		
			
		</div>
		
	</div>
	
  </div>



@endsection