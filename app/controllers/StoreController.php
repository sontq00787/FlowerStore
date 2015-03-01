<?php

class StoreController extends BaseController {

	public function getIndex(){
		if(isset($store)){
			return View::make("store")->with("store", $store);	
		}
		return View::make("store");
	}

}