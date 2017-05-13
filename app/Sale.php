<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {

    protected $table = 'sales';
    protected $fillable = ['id','sale_event','discount'];
    //public $timestamps = false;
}
