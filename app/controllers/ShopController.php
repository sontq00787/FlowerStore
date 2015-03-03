<?php

class ShopController extends BaseController {

	public function getIndex(){
		if(Session::has('product')){
			$products = Session::get('product');
			return View::make("shop")->with("products", $products)
					->with('cart', Cart::instance('shopping')->content())
					->with('total', Cart::instance('shopping')->total());
		}
		$product = DB::select("SELECT * FROM product");
		return View::make("shop")->with("products", $product)
				->with('cart', Cart::instance('shopping')->content())
				->with('total', Cart::instance('shopping')->total());	
	}

	public function productSearch(){
		
	}

}