<?php

namespace App\Http\Controllers;

use App\Models\list_name;
use Illuminate\Support\Facades\DB;
use App\Models\name_pro;
use Illuminate\Http\Request;

class List_nameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        //$show = $_GET[$id];
        //$p =  request()->url();
        $name = list_name::where('idname',$id)->paginate(9);      
        //$name =  $data->all($id);
        return view('admin.showlist',compact('name','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $name = name_pro::where('id',$id)->get();
        return view('admin.Addlist',compact('name','id'));
    }
    public function createlist()
    {
        $name = name_pro::all();
        return view('admin.list_name.Addlistall',compact('name'));
    }

     public function showedit($id)
    {
        $list =  name_pro::all();
        $name = list_name::where('id',$id)->get();
        return view('admin.list_name.updatelist',compact('name','id','list'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        list_name::create($request->all());
        $name = list_name::where('id',$id)->paginate(9);
        return view('admin.showlist',compact('name','id'));
    }
     public function storeall(Request $request)
    {
        list_name::create($request->all());
        $name = list_name::all();
        
        //$name =  $data->all($id);
        return view('admin.list_name.showlist',compact('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\list_name  $list_name
     * @return \Illuminate\Http\Response
     */
    public function show(list_name $list_name)
    {
         $name = list_name::paginate(9); 
        
        //$name =  $data->all($id);
        return view('admin.list_name.showlist',compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\list_name  $list_name
     * @return \Illuminate\Http\Response
     */
    public function edit(list_name $list_name)
    {
         //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\list_name  $list_name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, list_name $list_name)
    {
        $idname = $request->idname;
        $name = $request->name;
        $id = $request->idz;
        $affected = DB::table('list_name')
              ->where('id', $id)
              ->update(['name' => $name,
                        'idname' => $idname]);
        $masser = "Đã Sửa Thành Công";
        return view('admin.playout.messer',compact('masser'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\list_name  $list_name
     * @return \Illuminate\Http\Response
     */
    public function destroy(list_name $list_name)
    {
        //
    }
}
