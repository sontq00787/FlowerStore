<?php

class StoreController extends BaseController {

	public function getIndex(){

		if(Session::has('store')){
			$store = Session::get('store');
			return View::make("store")->with("store", $store)
				->with('cart', Cart::instance('shopping')->content())
				->with('total', Cart::instance('shopping')->total());	
		}
		$store = DB::select("SELECT * FROM store");
		return View::make("store")->with("store", $store)
			->with('cart', Cart::instance('shopping')->content())
				->with('total', Cart::instance('shopping')->total());
	}

}