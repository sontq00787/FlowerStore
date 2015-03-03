<?php

class OrderManageController extends BaseController {

	public function getIndex(){
		$order = Order::get();
		return View::make('order-manage')
				->with('order', $order);
	}

	public function setState(){
		$action = Input::get('action');
		$id = Input::get('id');
		if($id != null && $id != ""){
			if($action != null && $action != "" && $action == "cancel") {
				DB::table('order')
		            ->where('id', $id)
		            ->update(array('state' => 0));
			} else if($action != null && $action != "" && $action == "pending") {
				DB::table('order')
		            ->where('id', $id)
		            ->update(array('state' => 2));
			} else if($action != null && $action != "" && $action == "shipping") {
				DB::table('order')
		            ->where('id', $id)
		            ->update(array('state' => 1));
			}
		}
	}
}
