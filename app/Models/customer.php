<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'customer';
    protected $fillable = ['id','name','phone','adress'];
    public function get_detail(){
    	return $this->hasMany('App\Models\cart_detail','idcus','id');
    }
}
