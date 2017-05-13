<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

    protected $table = 'brands';
    protected $fillable = ['id','brand_name'];
    //public $timestamps = false;
}
