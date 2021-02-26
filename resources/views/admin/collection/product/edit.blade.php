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
            <span>Dashboard/SubCategory EDIT</span>
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
      

           <form class="form-horizontal" method="POST" action="{{url('product-update/'.$product->id)}}" enctype="multipart/form-data">
            

              {{ @csrf_field() }}
              {{method_field('PUT')}}

            <div class="form-group">
              <label class="control-label col-sm-2" for="sub_category_id">sub_category_id:</label>
                <div class="col-sm-10">
                  <select name = "sub_category_id" class = "form-control">
                    @foreach($trial as $trialtitem)
                    <option value="">select</option>
                    <option value="{{$trialtitem->id}}">{{$trialtitem->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
           
            <div class="form-group">
              <label class="control-label col-sm-2" for="url">url:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="url" name = "url" value="{{$product->url}}">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="name">name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name = "name" value="{{$product->name}}">
              </div>
            </div>

<div class="form-group">
              <label class="control-label col-sm-2" for="small_description">small_description:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="small_description" name = "small_description" value="{{$product->small_description}}">
              </div>
            </div>


<div class="form-group">
              <label class="control-label col-sm-2" for="image">image:</label>
              <div class="col-sm-10">
                 <input type="file" name="image" class="form-control"><br>
             <img src="{{asset('uploads/productimage/'.$product->image)}}" width="50px">
              </div>
            </div>


             <div class="form-group">
              <label class="control-label col-sm-2" for="p_highlight_heading">p_highlight_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_highlight_heading" id="p_highlight_heading" value="{{$product->p_highlight_heading}}">
                </div>
              </div>

               <div class="form-group">
              <label class="control-label col-sm-2" for="p_highlights">p_highlights:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_highlights" id="summernote" value="{{$product->p_highlights}}">
                </div>
              </div>


               <div class="form-group">
              <label class="control-label col-sm-2" for="">p_description_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_description_heading" id="summernote" value="{{$product->p_description_heading}}">
                </div>
              </div>


               <div class="form-group">
              <label class="control-label col-sm-2" for="">p_description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_description" id="summernote" value="{{$product->p_description}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="p_details_heading">p_details_heading:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_details_heading" id="p_details_heading" value="{{$product->p_details_heading}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="p_details">p_details:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "p_details" id="p_details" value="{{$product->p_details}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="sale_tag">sale_tag:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "sale_tag" id="sale_tag" value="{{$product->sale_tag}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="original_price">original_price:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "original_price" id="original_price" value="{{$product->original_price}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="offer_price">offer_price:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "offer_price" id="offer_price" value="{{$product->offer_price}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="quantity">quantity:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "quantity" id="quantity" value="{{$product->quantity}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="priority">priority:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "priority" id="priority" value="{{$product->priority}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="new_arrival_products">new_arrival_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "new_arrival_products" id="new_arrival_products" value="{{$product->new_arrival_products}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="featured_products">featured_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "featured_products" id="featured_products" value="{{$product->featured_products}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="popular_products">popular_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "popular_products" id="popular_products" value="{{$product->popular_products}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="offer_products">offer_products:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "offers_products" id="offer_products" value="{{$product->offers_products}}">
                </div>
              </div>





               <div class="form-group">
              <label class="control-label col-sm-2" for="status">status:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name = "status" id="status" value="{{$product->status}}">
                </div>
              </div>




               <div class="form-group">
              <label class="control-label col-sm-2" for="meta_title">meta_title:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_title" id="meta_title" value="{{$product->meta_title}}">
                </div>
              </div>



                <div class="form-group">
              <label class="control-label col-sm-2" for="meta_description">meta_description:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_description" id="meta_description" value="{{$product->meta_description}}">
                </div>
              </div>



               <div class="form-group">
              <label class="control-label col-sm-2" for="meta_keyword">meta_keyword:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name = "meta_keyword" id="meta_keyword" value="{{$product->meta_keyword}}">
                </div>
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





