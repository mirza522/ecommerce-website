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
         
        
           <form class="form-horizontal" method="POST" action="{{url('product-store')}}" enctype="multipart/form-data">
            
            {{@csrf_field()}}

           <div class="form-group">
              <label class="control-label col-sm-2" for="sub_category_id">sub_category_id:</label>
                <div class="col-sm-10">
                  <select name = "sub_category_id" class = "form-control">
                    <option value="">select</option>
                    @foreach($trial as $trialtitem)
                    <option value="{{$trialtitem->id}}">{{$trialtitem->name}}</option>
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
              <label class="control-label col-sm-2" for="small_description">small_description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "small_description" id="small_description" placeholder="small_description">
                </div>
              </div>

              <div class="form-group">
                <label for="">image</label>
                <input type="file" name="image" class="form-control">
                
              </div>


              <div class="form-group">
              <label class="control-label col-sm-2" for="p_highlight_heading">p_highlight_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_highlight_heading" id="p_highlight_heading" placeholder="p_highlight_heading">
                </div>
              </div>



              <div class="form-group">
              <label class="control-label col-sm-2" for="p_highlights">p_highlights:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_highlights" id="p_highlights" placeholder="p_highlights">
                </div>
              </div>






              <div class="form-group">
              <label class="control-label col-sm-2" for="p_description_heading">p_description_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_description_heading" id="p_description_heading" placeholder="p_description_heading">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="p_description">p_description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_description" id="p_description" placeholder="p_description">
                </div>
              </div>






              <div class="form-group">
              <label class="control-label col-sm-2" for="p_details_heading">p_details_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_details_heading" id="p_details_heading" placeholder="p_details_heading">
                </div>
              </div>







              <div class="form-group">
              <label class="control-label col-sm-2" for="p_details">p_details:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_details" id="p_details" placeholder="p_details">
                </div>
              </div>







              <div class="form-group">
              <label class="control-label col-sm-2" for="sale_tag">sale_tag:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "sale_tag" id="sale_tag" placeholder="sale_tag">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="original_price">original_price:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "original_price" id="original_price" placeholder="original_price">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="offer_price">offer_price:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "offer_price" id="offer_price" placeholder="offer_price">
                </div>
              </div>






              <div class="form-group">
              <label class="control-label col-sm-2" for="quantity">quantity:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "quantity" id="quantity" placeholder="quantity">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="priority">priority:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "priority" id="priority" placeholder="priority">
                </div>
              </div>






              <div class="form-group">
              <label class="control-label col-sm-2" for="new_arrival_products">new_arrival_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "new_arrival_products" id="new_arrival_products" placeholder="new_arrival_products">
                </div>
              </div>






              <div class="form-group">
              <label class="control-label col-sm-2" for="featured_products">featured_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "featured_products" id="featured_products" placeholder="featured_products">
                </div>
              </div>


              <div class="form-group">
              <label class="control-label col-sm-2" for="popular_products">popular_products:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "popular_products" id="popular_products" placeholder="popular_products">
                </div>
              </div>




              <div class="form-group">
              <label class="control-label col-sm-2" for="offer_products">offer_products:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "offers_products" id="offers_products" placeholder="offers_products">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="status">status:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "status" id="status" placeholder="status">
                </div>
              </div>




              <div class="form-group">
              <label class="control-label col-sm-2" for="meta_title">meta_title:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_title" id="meta_title" placeholder="meta_title">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="meta_description">meta_description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_description" id="meta_description" placeholder="meta_description">
                </div>
              </div>





              <div class="form-group">
              <label class="control-label col-sm-2" for="meta_keyword">meta_keyword:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_keyword" id="meta_keyword" placeholder="meta_keyword">
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
        <th>category_idss</th>
        <th>name</th>
        <th>description</th>
        <th>image</th>
          <th>priority</th>
        <th>status</th>
        
        <th>edit/delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $prodtitem)
      
      <tr>
         
        <td>{{$prodtitem->id}}</td>

          <td>{{$prodtitem->name}}</td>
        <td>{{$prodtitem->trial->category->group->name}}</td>
        <td>{{$prodtitem->description}}</td>
        <td>
          <img src="{{asset('uploads/productimage/'.$prodtitem->image)}}" width="50px">
        </td>
        
        <td>{{$prodtitem->priority}}</td>
        <td>{{$prodtitem->status}}</td>
       
        
        <td>
          <a href = "{{url('product-edit/'.$prodtitem->id)}}" 

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

@section('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

  @endsection