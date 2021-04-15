<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\list_name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
          $name = product::where('idlist',$id)->paginate(9);
          return view('admin.showproduct',compact('name','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $name = list_name::where('id',$id)->get();
        return view('admin.product.Addproduct',compact('name','id'));
    }
    public function createall()
    {
        $name = list_name::all();
        return view('admin.product.Addproduct',compact('name'));
    }
      public function showedit($id)
    {
        $list = list_name::all();
        $name = product::where('id',$id)->get();
        return view('admin.product.updateproduct',compact('name','id','list'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('file_img')){
            $file = $request->file_img;
            $ext = $request->file_img->extension();
            $file_name = time().'-'.'product.'.$ext;
            $file->move(public_path('images'), $file_name);
        }
        $qp =  $request->merge(['images' => $file_name]);//doi ten anh thanh chuoi de luu vao database
        product::create($request->all());
        $masser = "Đã Thêm Thành Công";
        return view('admin.playout.messer',compact('masser'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
         $name = product::paginate(9);
          return view('admin.product.showproduct',compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
       
         if($request->has('file_img')){
            $file = $request->file_img;
            $ext = $request->file_img->extension();
            $file_name = time().'-'.'product.'.$ext;
            $file->move(public_path('images'), $file_name);
        //$request->merge(['images' => $file_name]);//doi ten anh thanh chuoi de luu vao database
         $affected = DB::table('product')
               ->where('id', $request->id)
               ->update(['name' => $request->name,
                         'price' => $request->price,
                         'weight' => $request->weight,
                         'sales' => $request->sales,
                         'quantity' => $request->quantity,
                         'date' => $request->date,
                         'content' => $request->content,
                         'images' => $file_name,
                         'idlist' => $request->idlist
                     ]);
        }else{
             $affected = DB::table('product')
               ->where('id', $request->id)
               ->update(['name' => $request->name,
                         'price' => $request->price,
                         'weight' => $request->weight,
                         'sales' => $request->sales,
                         'quantity' => $request->quantity,
                         'date' => $request->date,
                         'content' => $request->content,
                         'images' => $request->file_iz,
                         'idlist' => $request->idlist
                     ]);
        }
        $masser = "Đã Sửa Thành Công";
        return view('admin.playout.messer',compact('masser'));
        
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = product::find($id);
        $data->delete();
        $masser = "Xóa Thành Công";
        return view('admin.playout.messer',compact('masser'));
    }
}
