<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'product';
    protected $fillable = ['id','name','price','weight','quantity','sales','date','images','content','idlist'
    ];
     public function get_list_name(){
    	return $this->belongsto('App\Models\list_name','idlist','id');
    }
    public function get_detail(){
    	return $this->belongsToMany('App\Models\cart_detail','idsp','id');
    }
}
