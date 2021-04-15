<?php

namespace App\Http\Controllers;

use App\Models\name_pro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Name_proController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.AddName');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        name_pro::create($request->all());
        $name = name_pro::all();
        return view('admin.playout.showname',compact('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\name_pro  $name_pro
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $name = name_pro::all();
        return view('admin.playout.showname',compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\name_pro  $name_pro
     * @return \Illuminate\Http\Response
     */
    public function edit(name_pro $name_pro, $id)
    {
        $name = name_pro::where('id',$id)->get();
        return view('admin.name_pro.edit',compact('name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\name_pro  $name_pro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, name_pro $name_pro)
    {
         //$b = $request->name;
         $id = $request->idz;
        //$t = $name_pro->update('name',$request->name);
       $affected = DB::table('name_pro')
              ->where('id', $id)
              ->update(['name' => $request->name]);
        //$b = print_r($affected);
        //$masser = "Đã Sửa Thành Công";
       $name = name_pro::all();
        return view('admin.playout.showname',compact('name'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\name_pro  $name_pro
     * @return \Illuminate\Http\Response
     */
    public function destroy(name_pro $name_pro)
    {
        //
    }
}
