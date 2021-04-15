<?php

namespace App\Models;
protected $table = 'cart';

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartp extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'cart';
    protected $fillable = ['id','idc','status'];
    public function get_detail($value=''){
    	return $this->hasMany('App\Models\cart_detail','idc','id');
    }
}
