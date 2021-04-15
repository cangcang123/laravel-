<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\name_pro;
use App\Models\list_name;

class menu extends Component
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
        $name = name_pro::all();
        return view('components.menu',compact('name'));
    }
}
