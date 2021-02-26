

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


          <div class="card">
             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


            <!--Card content-->
            <h4>current role:{{$user_roles->role_as}}</h4>
            <h5><td>
            @if($user_roles->isban == '0')
              <label class="py-2 px-3 badge btn-primary">not banned</label>
            @elseif($user_roles->isban == '1')
              <label class="py-2 px-3 badge btn-danger"> banned</label>
            @endif()
        </td></h5>
            <div class="card-body">
             <form action="{{url('role-update/'.$user_roles->id)}}" method="POST" > 
              {{csrf_field()  }}
              @method('PUT')

              <div class = "form-group">
                <input type="text" name="name" class="form-control" value="{{$user_roles->name}}">
                
              </div>

              <div class = "form-group">
                <input type="text"  class="form-control" readonly value="{{$user_roles->email}}">
                
              </div>

              <div class = "form-group">
               <select name="roles" class="form-control">
                <option value="0">--slect role</option>
                 
                <option value="admin">admin</option>
                <option value="vendor">vendor</option>
               </select> 
              </div>

                <div class = "form-group">
               <select name="isban" class="form-control">
                <option value="0">--slect ban/unban</option>
                 
                <option value="0">unban</option>
                <option value="1">ban</option>
               </select> 
              </div>  
  

              <div class="form-group">
                <button type="submit" class="btn btn-primary">update</button>
                
              </div>


              </form>



                  
</div>                  
                  
                  
            
             

    </div>

@endsection
