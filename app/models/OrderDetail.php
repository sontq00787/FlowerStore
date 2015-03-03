<?php

class OrderDetail extends Eloquent {
	protected $table = "orderdetail";
	protected $fillable = array("order_id", "product_id", "quantity");

	public $timestamps  = true;
}