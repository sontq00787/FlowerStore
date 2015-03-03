<?php

class OrderDetailManageController extends BaseController {

	public function getIndex($id){
		return View::make('order-detail-manage');
	}

}