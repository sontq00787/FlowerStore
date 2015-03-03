<?php

class ShopCartController extends BaseController {

	public function getIndex(){
		return View::make("shop-cart")
				->with('cart', Cart::instance('shopping')->content())
				->with('total', Cart::instance('shopping')->total());
	}

	public function getCart($id){
		$product = DB::select("SELECT * FROM product WHERE id = ".$id);
		if($product[0]->amount_changed > 0.00) {
			Cart::instance('shopping')->add(
				$id,
				$product[0]->name,
				1,
				$product[0]->amount_changed,
				array("image"=>$product[0]->image)
			);
		} else {
			Cart::instance('shopping')->add(
				$id,
				$product[0]->name,
				1,
				$product[0]->amount,
				array("image"=>$product[0]->image)
			);
		}
		return Redirect::route('shop-cart');
	}

	public function getRemoveItem($id){
		if(Cart::instance('shopping')->count() > 0){
			$search = Cart::instance('shopping')->search(array('id'=>$id));
			if($search != null && $search != ""){
				Cart::instance('shopping')->remove($search[0]);
			}
		}
		return Redirect::route('shop-cart');
	}

	public function getUpdateItem(){
		if(Request::ajax()) {
			$id = Input::get('id');
			$qty = Input::get('qty');
			if($id != null && $id != "" && $qty != null && $qty != ""){
				$search = Cart::instance('shopping')->search(array('id'=>$id));
				if($search != null && $search != ""){
					Cart::instance('shopping')->update($search[0],array('qty'=>$qty));
					return json_encode("true");
				}
				return json_encode("error");
			}
			return json_encode("false");
		}
	}
}