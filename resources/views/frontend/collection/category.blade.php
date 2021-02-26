@extends('layouts.frontend')

@section('content')



<div class="container card card-body">
	<div class="row">
		<div class="col-md-12">
				
			<label for="">collectionss/{{$group->name}}</label>
			
		</div>
		
	</div>
	
</div>

  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				@foreach($category as $catitem)
				<div class="col-md-3 mb-4">
					<div class="card">
						<img src="{{asset('uploads/categoryimage/'.$catitem->image)}}" class="w-100" alt="">
						<div class="card-body bg-light">
							<a href="" class="text-center">
								<h4>hissw:{{$catitem->name}}</h4>
							</a>
							
						</div>
						
					</div>
					
				</div>

			@endforeach
			</div>
			
		
			
		</div>
		
	</div>
	
  </div>



@endsection