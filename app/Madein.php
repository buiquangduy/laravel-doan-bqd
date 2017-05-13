<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Madein extends Model {

    protected $table = 'madeins';
    protected $fillable = ['id','country'];
    //public $timestamps = false;
}
