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
            <span>Collection/Groups</span>
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

              <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    ADD GROUPss
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
         
        
           <form class="form-horizontal" method="POST" action="{{url('group-add')}}">
            {{@csrf_field()}}
            


            <div class="form-group">
              <label class="control-label col-sm-2" for="name">username:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name = "url" placeholder="url">
                </div>
              </div>
             
            <div class="form-group">
              <label class="control-label col-sm-2" for="url">url:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "name" id="url" placeholder="name">
                </div>
              </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="description">description:</label>
              <div class="col-sm-10">
                <input type="description" class="form-control" id="description" name = "description" placeholder="Enter description">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="status">status:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "status" id="status" placeholder="status">
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

           
    
   


        </div>

    
          <!--Card-->
          <div class="card mt-10">

            <!--Card content-->
            <div class="card-body ">

  <table class="table table-bordered " >
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>url</th>
        <th>description</th>
        <th>status</th>
        <th>edit/delete</th>
      </tr>
    </thead>
    <tbody>

      @foreach($groups as $gitem)
      <tr>
         
        <td>{{$gitem['id']}}</td>
          <td>{{$gitem['url']}}</td>
        <td>{{$gitem['name']}}</td>
        <td>{{$gitem['description']}}</td>
        <td>{{$gitem['status']}}</td>
      <td>
          <a href = "{{url('group-edit/'.$gitem->id)}}" 

            class = "btn btn-danger">edit
          </a>
          <a href = "" 

            class = "btn btn-danger">delete
          </a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>




                  
</div>                  
                  
                  
            
            

    </div>

@endsection





