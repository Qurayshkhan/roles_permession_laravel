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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/product/{id}', function ($id) {
    $product = \App\Product::find($id);
 //    dd($hall);
     return view('details', compact('product'));
 })->name("product.show");
Route::post('/products','home\product_controller@check');
Route::get('/search','front_end\Hall_controller@query');
route::get('/','home\Product_Controller@index');
route::get('/product/view','front_end\Hall_controller@view');
// admins dashboard
//category && product
Route::get('/admin/categorycreate','CategoryController@index');
Route::post('/admin/categorycreate','CategoryController@submit');
Route::get('/admin/viewcategory','CategoryController@disp');
Route::get('/admin/viewhall','Hall_controller@admindisp');
Route::get('/categoryedit/{id}','CategoryController@edit')->name("categoryedit.show");
route::post('/categoryedit/{id}','CategoryController@update');
route::get('/categorydestroy/{id}','CategoryController@destroy')->name("categorydestroy.show");;
route::post('/categorydestroy/{id}','CategoryController@destroy');
Route::get('/admin/customer','Auth\UserController@list');
Route::get('/admin/productcreate','ProductController@index');
Route::post('/admin/productcreate','ProductController@submit');
Route::get('/viewproduct','ProductController@display');
Route::get('/productedit/{id}','ProductController@edit')->name("productedit.show");
route::post('/productedit/{id}','ProductController@update');
route::get('/prodductdestroy/{id}','ProductController@destroy')->name("productdestroy.show");;
route::post('/prodductdestroy/{id}','ProductController@destroy');
Route::get('/aprofile','ProfileController@admin');
Route::post('/apupdate','ProfileController@adminupdate');
Route::get('/admin/booking','BookingController@book');
Route::get('/admin/rating/{id}','Admin\RatingController@show')->name("adminrating.show");

// customer dashboard
Route::get('/booking','BookingController@index');
Route::post('/booking','BookingController@submit');
Route::get('/viewbooking','BookingController@disp');
Route::get('/uprofile','ProfileController@customer');
Route::post('/upupdate','ProfileController@customerupdate');
Route::get('/adminbooking','BookingController@book');

Route::get('/bookingedit/{id}','BookingController@edit')->name("bookingedit.show");
route::post('/bookingedit/{id}','BookingController@update');
route::get('/bookingdestroy/{id}','BookingController@destroy')->name("bookingdestroy.show");;
route::post('/bookingdestroy/{id}','BookingController@destroy');

route::get('/category/{id}','Hall_category_controller@show')->name("category.show");

// user feedback
Route::post('/userrating','Rating_controller@store')->name("userrating.store");
Route::get('/userrating/{id}','Rating_controller@show')->name("userrating.show");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::namespace('Admin')->group(function () {
 Route::group(['prefix' => '/admin'], function () {
     
     
     Route::get('/login', 'Auth\LoginController@showLoginForm')->name("admin.login.index");
     Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name("admin.register.index");
     Route::post('/login', 'Auth\LoginController@adminLogin')->name("admin.login");
     Route::post('/register', 'Auth\RegisterController@adminRegistration')->name("admin.register");
//            reset password
     Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
     Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
     Route::post('/password/reset','Auth\ResetPasswordController@reset')->name("admin.password.update");
     Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

     Route::middleware(['auth:admin'])->group(function () {
         Route::post('/logout', 'Auth\LoginController@logout')->name("admin.logout");
         Route::resource('dashboard', 'AdminController', ['as' => 'admin']);
     });
 });

});
