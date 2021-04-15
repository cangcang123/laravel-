<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart_shopping extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'cart_shopping';
    protected $fillable = ['id','idcd','status'];
    public function get_detail($value=''){
    	return $this->hasMany('App\Models\cart_detail','idc','id');
    }
}
