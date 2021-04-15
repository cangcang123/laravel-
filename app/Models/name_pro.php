<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class name_pro extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'name_pro';
    protected $fillable  = ['id','name'];
    public function get_list_name(){
    	return $this->hasMany('App\Models\list_name','idname','id');
    }
    
}
