<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Name_proController;
use App\Http\Controllers\List_nameController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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


  //Route::get('/', function () {//sử dụng controller nguyên bản
      //return view('home');
  //});
 // Route::get('admin', function () {//sử dụng controller nguyên bản
 //     return view('admin.home');
 // });
 
 Route::get('/','HomeController@index')->name('home.index');

 Route::get('/user','HomeController@login')->name('home.login');
 Route::post('/register','HomeController@register')->name('home.register');
 Route::get('/playout','HomeController@playout')->name('home.playout');
 Route::get('/relogin','HomeController@relogin')->name('home.relogin');
 Route::get('/DanhSach/{id}','HomeController@name')->name('home.name');
 Route::post('/checklogin','HomeController@checklogin')->name('home.checklogin');
 Route::get('/logout','HomeController@logout')->name('home.logout');
 Route::get('/sanpham/{id}','HomeController@product')->name('home.product');
 Route::post('/cart','HomeController@cartadd')->name('cart.add');
 Route::get('/test','HomeController@testsession')->name('test');
 Route::get('/GioHang','HomeController@showcart')->name('cart.show');
 Route::get('/GioHang/{rowId}','HomeController@deletecart')->name('cart.delete');
 Route::post('/GioHang','HomeController@update')->name('cart.update');
 Route::post('/thanhtoan','HomeController@cartuser')->name('cart.user');
 Route::post('/khachhangthanhtoan','HomeController@customer')->name('customer');
 Route::post('/timkiem','HomeController@searchsanpham')->name('home.search');
 Route::get('/dansachsanpham/{id}','HomeController@listsp')->name('home.listname');
 Route::get('/timsanpham','HomeController@getSearch')->name('home.searchsp');
 Route::get('/homecart/{id}','HomeController@cartaddhome')->name('cart.homeadd');


 
 //Route::get('/admin', 'AdminController@index')->name('admin.index');//route('home.index')
 



 Route::group(['prefix' => 'admin'],function(){
 	Route::get('/','AdminController@playout')->name('admin.playout'); 
 	Route::get('/trangchu','AdminController@index')->name('admin.index'); 
 	Route::get('/KieuSanPham','Name_proController@show')->name('admin.ShowName');
 	Route::get('/AddKieu','Name_proController@create')->name('admin.addname');
 	Route::post('/addkieuSP','Name_proController@store')->name('admin.createname');
 	Route::get('/showlist/{id}','List_nameController@index')->name('admin.showlist');
 	Route::get('/editname/{id}','Name_proController@edit')->name('admin.editname');
 	Route::put('/SuaLoaisp','Name_proController@update')->name('admin.updatename');
 	Route::get('/AddLoai/{id}','List_nameController@create')->name('admin.addlist');
 	Route::post('/addkieuSP/{id}','List_nameController@store')->name('admin.createlist');
 	Route::get('/showProduct/{id}','ProductController@index')->name('admin.showproduct');
 	Route::get('/AddSanPham/{id}','ProductController@create')->name('admin.Addproduct');
 	Route::post('/addsanpham','ProductController@store')->name('admin.createproduct');
 	Route::get('/SuaSanPham/{id}','ProductController@showedit')->name('admin.editproduct');
 	Route::get('/XoaSanPham/{id}','ProductController@destroy')->name('admin.deleteproduct');
 	Route::put('/Suasanpham','ProductController@update')->name('admin.updateproduct');
 	Route::get('/showAllList','List_nameController@show')->name('admin.ShowAllList');
 	Route::get('/AddLoai','List_nameController@createlist')->name('admin.addlistall');
 	Route::post('/addkieuSP','List_nameController@storeall')->name('admin.createlistall');
 	Route::get('/showAllProduct','ProductController@show')->name('admin.ShowAllProduct');
 	Route::get('/ShowUser','UserssController@show')->name('admin.ShowUser');
 	Route::get('/ShowKhach','CustomerController@show')->name('admin.ShowCus');
 	Route::get('/ShowCartNew','CartController@showNew')->name('admin.ShowCartNew');
 	Route::get('/ShowCartOld','CartController@showOld')->name('admin.ShowCartOld');
 	Route::get('/AddSanPham','ProductController@createall')->name('admin.Addproductall');
 	Route::post('/addAllsanpham','ProductController@storeall')->name('admin.createproductall');
 	Route::get('/XoaUser/{id}','UserssController@destroy')->name('admin.deleteuser');
 	Route::get('/XoaKhach/{id}','CustomerController@destroy')->name('admin.deleteCus');
	Route::get('/SuaList/{id}','List_nameController@showedit')->name('admin.updatelist');
	Route::put('/SuaKieuSP','List_nameController@update')->name('admin.updatelist_name');
	Route::get('/CheckStatus/{id}','CartController@checkstatus')->name('admin.checkstatus');
	Route::get('/xoacart/{id}','CartController@delete')->name('admin.delcart'); 
	Route::post('/checklogin','UserssController@checklogin')->name('admin.checklogin');
 });

