<?php

class Product extends Eloquent {
	protected $table = "product";
	protected $fillable = array("name", "short_description", "introduction", "description", "image", "weight", "dimensions", "color", "guarantee", "availability", "madein", "category", "amount", "amount_changed", "store_id");
	public $timestamps  = true;
}