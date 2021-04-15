<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Models\name_pro;
use App\Models\list_name;
use App\Models\product;
class content extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $all = DB::table('product')->select('product.id','product.name','product.price','product.images')->join('list_name','list_name.id','=','product.idlist')->join('name_pro','name_pro.id','=','list_name.idname')->skip(0)->take(8)->get();
        $thit = product::where('idlist',1)->skip(0)->take(4)->get();
        $ca = product::where('idlist',3)->skip(0)->take(4)->get();
        $ga = product::where('idlist',5)->skip(0)->take(4)->get();
        $haisan = product::where('idlist',4)->skip(0)->take(4)->get();
        return view('components.content',compact('all','thit','ca','ga','haisan'));
    }
}
