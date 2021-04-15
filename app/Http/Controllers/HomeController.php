<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\name_pro;
use App\Models\list_name;
use App\Models\product;
use App\Models\customer;
use App\Models\User;
use App\Models\cart_detail;
use App\Models\cart_shopping;
use Illuminate\Support\Facades\Session;
use Cart;

class HomeController extends Controller
{
    
    public function index()
    {

        return view('home');
    }
    public function login(){
    	return view('pages.login');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:User,username',
            'passa' => 'required|min:6|max:20',
            'phone' => 'required',
            'adress' => 'required'

        ],
        [
            'name.required' => 'Vui Lòng Không Để Trống họ tên',
            'username.required' => 'Vui Lòng Không Để Trống Username',
            'username.unique' => 'Tài Khoản Đã có Người Đăng Ký',
            'passa.required' => 'Vui Lòng Không Để Trống Mật Khẩu',
            'passa.min' => ' Mật Khẩu Ít Nhất 6 ký tự',
            'passa.max' => 'mật khẩu đã quá 20 ký tự',
            'phone.required' => 'Vui Lòng Không Để Trống số điện thoại',
            'adress.required' => 'Vui Lòng Không Để Trống địa chỉ để giao hàng',
        ]);
        $password = bcrypt($request->passa);
        $request->merge(['password' => $password]);
        User::create($request->all());
        return redirect()->back()->with('success','Đã Tạo Thành Công');
    }
    public function checklogin(Request $request, User $user){
        $array = [
            'username' => $request->username,
            'password' => $request->password];
        if(Auth::attempt($array)){
            return redirect()->route('home.index');
        }else{
        return redirect()->back()->with('note','Đăng Nhập Thất Bại');
    }
    }
    public function relogin(){
        return view('pages.relogin');
    }
    public function playout(){
    	$all = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->join('name_pro','name_pro.id','=','list_name.idname')->skip(0)->take(8)->get();
        $thit = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->where('list_name.id','=','1')->skip(0)->take(4)->get();
        $ca = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->where('list_name.id','=','3')->skip(0)->take(4)->get();
        $ga = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->where('list_name.id','=','5')->skip(0)->take(4)->get();
        $haisan = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->where('list_name.id','=','4')->skip(0)->take(4)->get();
        $name = name_pro::all();
    	return view('playout.menu',compact('name','all','thit','ca','ga','haisan'));
    }
    public function name($id){
        $name_pro = name_pro::all();
        // $saleoff = DB::table('name_pro')->where('sales', '>', 0)->get();
        $name = DB::table('list_name')->Where('idname',$id)->get();
        $product = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->where('list_name.idname',$id)->paginate(9);
         $saleoff = DB::table('product')->select('product.id','product.name','product.price','product.images','product.sales')->join('list_name','list_name.id','=','product.idlist')->where('list_name.idname',$id)->where('sales', '>', 0)->skip(0)->take(3)->get();
        return view('pages.name',compact('name','product','name_pro','saleoff'));
        //$data = $product->paginate(9);
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('home.index');
    }
    public function product($id){
        $name_pro = name_pro::all();
        $name = product::where('id',$id)->first();
        $idlist = $name->idlist;
        $catogory_product = product::where('idlist',$idlist)->skip(0)->take(4)->get();

        return view('pages.product',compact('name','name_pro','catogory_product'));
    }
    public function listsp($id){
        $name_pro = name_pro::all();
        $list = list_name::Where('id',$id)->get();
        foreach ($list as $value) {
             $idname  = $value->idname;
        }
        $name = list_name::where('idname',$idname)->get();
        $product = Product::where('idlist',$id)->paginate(9);
        $saleoff = Product::where('idlist',$id)->where('sales', '>', 0)->skip(0)->take(3)->get();
        return view('pages.list',compact('name','product','name_pro','saleoff'));
    }
    public function cartadd(Request $request){
        $idpro =  $request->idsp;
        $product = Product::where('id',$idpro)->first();
        $data['id'] = $request->idsp;
        $data['qty'] = $request->quantity;
        $data['name'] = $product->name;
        $data['price'] = $product->price;
        $data['weight'] = $product->weight;
        $data['options']['images'] = $product->images;
        $data['options']['iduser'] = $request->iduser;
        Cart::add($data); 
        return redirect()->route('home.index');

    }
    
    public function cartaddhome($id){
        $product = Product::where('id',$id)->first();
        $data['id'] = $id;
        $data['qty'] = 1;
        $data['name'] = $product->name;
        $data['price'] = $product->price;
        $data['weight'] = $product->weight;
        $data['options']['images'] = $product->images;
        if(Auth::check()){
            $iduser = Auth::user()->id;
            $data['options']['iduser'] = $iduser;
        }
        Cart::add($data); 
        return redirect()->route('home.index');

    }
    public function testsession(Request $request){
       $q = Session::all();
       $a = print_r($q);
        return view('test',compact('a'));
    }
    public function showcart(){
         $name = name_pro::all();
        return view('pages.showcart',compact('name'));
    }
    public function deletecart($rowId){
        Cart::update($rowId,0);
         return redirect()->route('cart.show');
    }
    public function update (Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        
        //return view('test',compact('qty'));
        return redirect()->route('cart.show');
    }
    public function cartuser(Request $request){
         $notes = $request->notes;
        if(isset($request->save)){
        if(Auth::check()){
           $iduser = Auth::user()->id;
           $cart = Cart::content();
            foreach ( $cart as $value) {
                $idsp = $value->id;
                $quantity = $value->qty;
                $array = [
                    'idsp' => $idsp,
                    'quantity' => $quantity,
                    'iduser' => $iduser,
                    'notes' => $notes,
                ];
                $idcd = DB::table('cart_detail')->insertGetId($array);
                    $array2 = [
                    'idcd' => $idcd,
                    'status' => $request->status,
                ];
                //$b= print_r($array2);
                $z = cart_shopping::create($array2);
                Cart::destroy();
            }
           $b = "đặt hàng thành công";
           return view('test',compact('b'));
        }else{
             $name = name_pro::all();  
            return view('pages.customer',compact('name'));
        }
    }
     return redirect()->route('cart.show');   
    }
    public function customer(Request $request){
        if(isset($request->create)){
            $notes = $request->notes;
            $array1 = [
                'name' => $request->name,
                'phone' => $request->phone,
                'adress' => $request->adress,
            ];
            $customer = DB::table('customer')->insertGetId($array1);
             $cart = Cart::content();
            foreach ( $cart as $value) {
                 $idsp = $value->id;
                $quantity = $value->qty;
                 $array = [
                     'idsp' => $idsp,
                     'quantity' => $quantity,
                     'idcus' => $customer,
                     'notes' => $notes,
                 ];
                 $detail = cart_detail::create($array);
                    $idcd = DB::table('cart_detail')->insertGetId($array);
                    $array2 = [
                    'idcd' => $idcd,
                    'status' => 1,
                ];
                //$b= print_r($array2);
                $z = cart_shopping::create($array2);
                Cart::destroy();
            }
           $b = "đặt hàng thành công";
           return view('test',compact('b'));
        }
        return view('home');
    }
    public function searchsanpham(Request $request){
        //$b = $request->name;
        //if(isset($request->timkiem)){
         $name_pro = name_pro::all();
         $product = Product::where('name','like','%'.$request->name.'%')->orWhere('price',$request->name)->paginate(9);
        return view('pages.search',compact('name_pro','product'));
    // }
    // return redirect()->route('home.index');
    }
    // public function getSearch(Request $request){
    //     $name_pro = name_pro::all();
    //     $product = Product::where('name','like','%'.$request->key.'%')->orWhere('price',$request->key)->paginate(9);
    //     return view('pages.search',compact('name_pro','product'));
    // }
}
