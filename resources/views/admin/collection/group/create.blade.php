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
            <span>Dashboard s</span>
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


         
         
    
           
    
   


  <table class="table table-bordered " >
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        
        <th>description</th>
        <th>status</th>
        <th>icon</th>
        <th>image</th>
        <th>edit/delete</th>
      </tr>
    </thead>
     
      <tr>
         
        <td></td>
          <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <a href = "{{url('-edit/'.$catitem->id)}}" 

            class = "btn btn-primary">edit
          </a>
        </td>

      </tr>

    
    </tbody>
  </table>




                  
</div>                  
                  
                  
            
            

    </div>

@endsection





