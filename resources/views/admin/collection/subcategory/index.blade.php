@extends('layouts.admin')

@section('content')



<div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Collection/Subcategories</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fa fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <!-- Heading -->


          <div class="card">

            <!--Card content-->
            <div class="card-body">
            	@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    ADD SUbcategories
   </button>
   <!-- Modal -->
 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
        
           <form class="form-horizontal" method="POST" action="{{url('subcategory-store')}}" enctype="multipart/form-data">
            
            {{@csrf_field()}}

           <div class="form-group">
              <label class="control-label col-sm-2" for="category_id">category_id:</label>
                <div class="col-sm-10">
                  <select name = "category_id" class = "form-control">
                    <option value="">select</option>
                    @foreach($category as $catitem)
                    <option value="{{$catitem->id}}">{{$catitem->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
             
            <div class="form-group">
              <label class="control-label col-sm-2" for="url">url:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "url" id="url" placeholder="url">
                </div>
              </div>
           <div class="form-group">
              <label class="control-label col-sm-2" for="name">nme:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "name" id="name" placeholder="name">
                </div>
              </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="description">description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "description" id="description" placeholder="description">
                </div>
              
              </div>

              <div class="form-group">
                <label for="">image</label>
                <input type="file" name="subcategory_img" class="form-control">
                
              </div>

               <div class="form-group">
              <label class="control-label col-sm-2" for="status">priority:</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="priority" name = "priority" placeholder="Enter priority">
              </div>
            </div>



              <div class="form-group">
              <label class="control-label col-sm-2" for="status">status:</label>
              <div class="col-sm-10">
                <input type="description" class="form-control" id="status" name = "status" placeholder="Enter status">
              </div>
            </div>

              
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>

               
            </form> 
                     

         
         
         
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
      </div>
     </div>
   </div>
</div>

           

					
					
					 <table class="table table-bordered " >
    <thead>
      <tr>
        <th>id</th>
        <th>category_id</th>
        <th>name</th>
        <th>description</th>
        <th>image</th>
          <th>priority</th>
        <th>status</th>
        
        <th>edit/delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($trial as $subcatitem)
      
      <tr>
         
        <td>{{$subcatitem->id}}</td>
          <td>{{$subcatitem->name}}</td>
        <td>{{$subcatitem->category->group->name}}</td>
        <td>{{$subcatitem->description}}</td>
        <td>
          <img src="{{asset('uploads/subcategoryimage/'.$subcatitem->image)}}" width="50px">
        </td>
        
        <td>{{$subcatitem->priority}}</td>
        <td>{{$subcatitem->status}}</td>
       
        
        <td>
          <a href = "{{url('subcategory-edit/'.$subcatitem->id)}}" 

            class = "btn btn-primary">edit
          </a>
          <a href = "" class = "btn btn-danger">delets
          </a>

          <a href ="" class = "btn btn-success">views
          </a>


        </td>

      </tr>
      @endforeach 
      </div>                  
                  
                  
            
            

    </div>

@endsection


