

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
            <span>Dashboard/Registered User</span>
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

          <div class="card ">

            <!--Card content-->
            <div class="card-body ">
      <div class="row">
        <div class="col-md-6">
          <form action="{{url('registered-user')}}" method="GET">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                 
                  <select name="roles" id="" class="form-control">
                  <option value="">default</option>
                  <option value="admin">admin</option>
                  <option value="vendor">vendor</option>
                </select>
                </div>
                
              </div>
              
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn brn-primary">filter</button>
              
            </div>
            
          </form>
          
        </div>
        <div class="col-md-6">
          
        </div>        
      </div>>


              <!-- Button trigger modal -->
  

           
    
   


        </div>

    
          <!--Card-->
          <div class="card ">

            <!--Card content-->
            <div class="card-body  ">

  <table id="datatable" class="table table-bordered " >
    <thead>
    
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>role_as</th>
        <th>online/offline</th>
        <th>isban/notban</th>
        <th>action</th>
        
    </thead>
     <tbody>
       @foreach($users as $item)     
      <tr>
         
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->role_as}}</td>
        <td>
            @if($item->isUserOnline())
              <label class="py-2 px-3 badge btn-primary">online</label>
            @else
              <label class="py-2 px-3 badge btn-danger"> offline</label>
            @endif()
        </td>
         <td>
            @if($item->isban == '0')
              <label class="py-2 px-3 badge btn-primary">not banned</label>
            @elseif($item->isban == '1')
              <label class="py-2 px-3 badge btn-danger"> banned</label>
            @endif()
        </td>
      
      
        <td>
          <a href = "" class = "btn btn-info">views
          </a>

          <a href = "" class = "btn btn-danger">delets
          </a>

          <a href ="{{url('role-edit/'.$item->id)}}" class = "btn btn-success">updates
          </a>


        </td> 
       

      </tr>
      
     @endforeach
    </tbody>
    {{$users->links()}}
  </table>




                  
</div>                  
                  
                  
            
            

    </div>

@endsection


@section('scripts')


<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>

@endsection