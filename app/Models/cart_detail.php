<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_detail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'cart_detail';
    protected $fillable = ['id','idsp','quantity','idcus','iduser','notes'];
    public function get_product(){
    	return $this->belongsto('App\Models\product','idsp','id');
    }
     public function get_user(){
    	return $this->belongsto('App\Models\Users','idsp','id');
    }
    public function get_customer(){
    	return $this->belongsto('App\Models\customer','idcus','id');
    }
    public function get_cart(){
    	return $this->hasMany('App\Models\cart','idcd','id');
    }
    public function get_cartshopping(){
        return $this->hasMany('App\Models\cart_shopping','idcd','id');
    }
}
 