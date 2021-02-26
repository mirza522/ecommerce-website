 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});



Auth::routes();

Route::get('collections', 'Frontend\CollectionController@index');

Route::get('collection/{group_url}', 'Frontend\CollectionController@groupview');

Route::get('collection/{group_url}/{cate_url}', 'Frontend\CollectionController@categoryview');

Route::get('collection/{group_url}/{cate_url}/{subcate_url}', 'Frontend\CollectionController@subcategoryview');
Route::get('collection/{group_url}/{cate_url}/{subcate_url}/{prod_url}', 'Frontend\CollectionController@productview');

Route::post('add-to-cart','CartController@addtocart');





Route::group(['middleware'=>['auth','isUser']],function(){
		Route::get('/home', 'HomeController@index')->name('home');
		Route::get('/my-profile', 'Frontend\UserController@myprofile');

		Route::POST('/my-profile-update', 'Frontend\UserController@profileupdate');

});



Route::group(['middleware'=>['auth','isAdmin']],function()
{
Route::get('/dashboard', function () {
    return view('admin.dashboard2');
});

Route::get('/registered-user', 'Admin\RegisteredController@index');
Route::get('/role-edit/{id}', 'Admin\RegisteredController@edit');
Route::put('/role-update/{id}', 'Admin\RegisteredController@updaterole');

//Groups
Route::get('/group', 'GroupController@index');
Route::post('/group-add', 'GroupController@store');
//Route::get('/group-store', 'Admin\GroupController@store');
Route::get('group-edit/{id}', 'GroupController@edit');
Route::put('group-update/{id}', 'GroupController@update');



//category
Route::get('/category', 'CategoryController@index');
Route::post('/category-add', 'CategoryController@store');
Route::get('category-edit/{id}', 'CategoryController@edit');
Route::put('category-update/{id}', 'CategoryController@update');


//subactegory
Route::get('/subcategory', 'SubcategoryController@index');
Route::post('/subcategory-store', 'SubcategoryController@store');
Route::get('subcategory-edit/{id}', 'SubcategoryController@edit');
Route::put('subcategory-update/{id}', 'SubcategoryController@update');

//products
Route::get('/product', 'ProductController@index');
Route::post('/product-store', 'ProductController@store');
Route::get('product-edit/{id}', 'ProductController@edit');
Route::put('product-update/{id}', 'ProductController@update');

});

Route::group(['middleware'=>['auth','isUser']],function(){
		Route::get('/home', 'HomeController@index')->name('home');
		
		Route::get('/vendor-dashboard', function () {
    return view('vendor.dashboard2');
});


});


