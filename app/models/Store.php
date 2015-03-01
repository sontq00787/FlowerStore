<?php

class Store extends Eloquent {
	protected $table = "store";
	protected $fillable = array("name", "address", "phone", "storekeeper");

	public $timestamps  = true;
}