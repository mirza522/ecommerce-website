
@extends('layouts.frontend')

@section('content')


  <section class = "py-5">
		  	<div class = "container">
  	  <div class = "row">
  	    <!--Section: Products v.3-->

  	    	<div class="col-md-12">
  	    	  <div class="card py-5">
  	    	  	<div class="card-body">
  	    	  	
  	    	  			
  	    		 <h7>
  	    		 	my profile
  	    		 </h7>
  	    		 <hr>
  	    		 <form action="{{url('my-profile-update')}}" method="POST" enctype="multipart/form-data">
  	    		 	{{ @csrf_field() }}
  	    		 	<div class="row">
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">First Name</label>
  	    		 				<input type="text" name="name" class="form-control" value="		{{Auth::user()->name}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for=""> lName</label>
  	    		 				<input type="text" class="form-control" value="		{{Auth::user()->lname}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">email</label>
  	    		 				<input type="text" class="form-control" readonly value="{{Auth::user()->email}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-6">
  	    		 			<div class="form-group">
  	    		 				<label for="">Adress1</label>
  	    		 				<input type="text" name="adress1" class="form-control" value="		{{Auth::user()->adress1}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-6">
  	    		 			<div class="form-group">
  	    		 				<label for="">Adress2</label>
  	    		 				<input type="text" name="adress2" class="form-control" value="		{{Auth::user()->adress2}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-6">
  	    		 			<div class="form-group">
  	    		 				<label for="">city</label>
  	    		 				<input type="text" name="city" class="form-control" value="		{{Auth::user()->city}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">state</label>
  	    		 				<input type="text" name="state" class="form-control" value="		{{Auth::user()->state}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		   <div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">pincode</label>
  	    		 				<input type="text" name="pincode" class="form-control" value="		{{Auth::user()->pincode}}">
  	    		 		
  	    		 			</div>
  	    		 		  </div>
  	    		 		  <div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">phone</label>
  	    		 				<input type="text" name="phone" class="form-control" value="		{{Auth::user()->phone}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">alternate_phone</label>
  	    		 				<input type="text" name="alternate_phone" class="form-control" value="{{Auth::user()->alternate_phone}}">
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 		
  	    		 		<div class="col-md-4">
  	    		 			<div class="form-group">
  	    		 				<label for="">you profile update</label>
  	    		 				<button type="submit" class="btn btn-primary">update profile</button>
  	    		 		
  	    		 			</div>
  	    		 		</div>
  	    		 	
  	    		 		<div class="col-md-4">
                  <input type="file" name="image" class="form-control"><br>
  	    		 <img src="{{asset('uploads/profile/'.Auth::user()->image)}}" class="w-75">
  	    		 		</div>					

  	    		 	</div>
  	    		 	
  	    		 </form>
  	    		</div>
  	    	  </div>	
  	    	</div>


  	  </div>
  	</div>
  </section>	
	
@endsection 