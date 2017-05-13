<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	//
	protected $table = 'orders';
	protected $fillable = ['transaction_id','product_id','qty','amount','status','is_viewed'];
	//public $timestamps = false;

}
