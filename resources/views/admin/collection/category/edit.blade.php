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
            <span>Dashboard/Category EDIT</span>
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
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
       <div class="card-body">
      

           <form class="form-horizontal" method="POST" action="{{url('category-update/'.$category->id)}}" enctype="multipart/form-data">
            
              {{ @csrf_field() }}
              {{method_field('PUT')}}

            <div class="form-group">
              <label class="control-label col-sm-2" for="group_id">group_id:</label>
                <div class="col-sm-10">
                  <select name = "group_id" class = "form-control">
                    @foreach($group as $gitem)
                    <option value="">select</option>
                    <option value="{{$gitem->id}}">{{$gitem->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
           
            <div class="form-group">
              <label class="control-label col-sm-2" for="url">url:</label>
              <div class="col-sm-10">
                <input type="description" class="form-control" id="url" name = "url" value="{{$category->url}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name = "name" value="{{$category->name}}">
              </div>
            </div>

<div class="form-group">
              <label class="control-label col-sm-2" for="description">description:</label>
              <div class="col-sm-10">
                <input type="description" class="form-control" id="description" name = "description" value="{{$category->description}}">
              </div>
            </div>


<div class="form-group">
              <label class="control-label col-sm-2" for="image">image:</label>
              <div class="col-sm-10">
                 <input type="file" name="category_img" class="form-control"><br>
             <img src="{{asset('uploads/categoryimage/'.$category->image)}}" width="50px">
              </div>
            </div>




<div class="form-group">
              <label class="control-label col-sm-2" for="icon">icon:</label>
              <div class="col-sm-10">
                 <input type="file" name="category_icon" class="form-control"><br>
             <img src="{{asset('uploads/categoryicon/'.$category->icon)}}" width="50px">
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="status">status:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "status" id="status" value="{{$category->status}}">
                </div>
              
    
              
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>

               
            </form> 
                     


  




                  
      </div>

    </div> 



    </div>                  
                  
                  
            
            

    </div>

@endsection





