<?php

class Order extends Eloquent {
	protected $table = "order";
	protected $fillable = array("first_name", "last_name", "email", "phone", "company_name", "address", "address_detail", "town_city", "state_country", "postcode", "notes", "state","country_code");

	public $timestamps  = true;
}