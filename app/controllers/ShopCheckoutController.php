<?php

class ShopCheckoutController extends BaseController {

	public function getIndex(){
		return View::make('shop-checkout')
				->with('cart', Cart::instance('shopping')->content())
				->with('total', Cart::instance('shopping')->total());
	}

	public function postOrder(){
		if(Request::ajax()) {
			$action = Input::get("action");
			if($action != null && $action != "") {
				$email= Input::get("email");
                $phone= Input::get("phone");
                $country= Input::get("country");
                $first_name= Input::get("first_name");
                $last_name= Input::get("last_name");
                $company_name= Input::get("company_name");
                $address= Input::get("address");
                $address_detail= Input::get("address_detail");
                $town_city= Input::get("town_city");
                $state_country= Input::get("state_country");
                $postcode= Input::get("postcode");
                $notes = Input::get("notes");
                $id = str_random(40);

                $order = new Order;
                $order->id = $id;
                $order->email = $email;
                $order->phone = $phone;
                $order->country_code = $country;
                $order->first_name = $first_name;
                $order->last_name = $last_name;
                $order->company_name = $company_name;
                $order->address = $address;
                $order->address_detail = $address_detail;
                $order->town_city = $town_city;
                $order->state_country = $state_country;
                $order->postcode = $postcode;
                $order->notes = $notes;

                if($order->save()) {
                	$cart = Cart::instance('shopping')->content();
                	foreach ($cart as $row) {
                		$orderDetail = new OrderDetail;
                		$orderDetail->order_id = $id;
                		$orderDetail->product_id = $row->id;
                		$orderDetail->quantity = $row->qty;
                		if (!$orderDetail->save()) {
                			$orderdel = Order::find($id);
                			$orderdel->delete();
                			return json_encode("Cannot create an order detail, now. Please try again later");
                		}
                	}
                	return json_encode("Your order id: ".$id.". Thanks for your order! Have a beautiful day!");
                } else {
                	return json_encode("Cannot create an order, now. Please try again later!");
                }
			}
		}
	}
}