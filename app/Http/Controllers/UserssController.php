<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserssController extends Controller
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
    public function checklogin(Request $request){
        $array = [
            'username' => $request->username,
            'password' => $request->password,
            'active' =>1];

        if(Auth::attempt($array)){
            return redirect()->route('admin.index');
        }else{
        return redirect()->back()->with('note','Đăng Nhập Thất Bại');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
         $name = User::paginate(9);
          return view('admin.user.showuser',compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function edit(userss $userss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userss $userss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userss  $userss
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = User::find($id);
        $data->delete();
        $masser = "Xóa Thành Công";
         $name = User::all();
        return view('admin.user.showuser',compact('name'));
    }
}
