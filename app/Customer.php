<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $table = 'customers';
    protected $fillable = ['id', 'customer_name', 'customer_email', 'customer_sex', 'customer_phone', 'customer_address'];
    //public $timestamps = false;
}
