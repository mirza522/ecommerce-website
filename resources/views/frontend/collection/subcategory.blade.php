@extends('layouts.frontend')

@section('content')



<div class="container card card-body">
	<div class="row">
		<div class="col-md-12">
				
			<label for="">collectionss/{{$category->group->name}}/{{$category->name}}</label>
			
		</div>
		
	</div>
	
</div>

  <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				@foreach($subcategory as $subcatitem)
				<div class="col-md-3 mb-4">
					<div class="card">
						<img src="{{asset('uploads/subcategoryimage/'.$subcatitem->image)}}" class="w-100" alt="">
						<div class="card-body bg-light">
							<a href="{{url('collection/'.$subcatitem->category->group->url.'/'.$subcatitem->category->url.'/'.$subcatitem->url)}}">
								<h4>hissw:{{$subcatitem->name}}</h4>
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