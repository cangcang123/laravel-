<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_name extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'list_name';
    protected $fillable = ['id','name','idname'];
    public function get_list_name(){
    	return $this->belongsto('App\Models\name_pro','idname','id');
    }
    public function get_product(){
    	return $this->hasMany('App\Models\product','idlist','id');
    }
}
