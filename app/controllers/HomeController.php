<?php

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex(){
		return View::make('index');
	}

	public function getFindStore(){
		$pre = Input::get('pre');
		$post = Input::get('post');
		$store = DB::select("SELECT * FROM store WHERE address LIKE '%".$pre."%' AND address LIKE '%".$post."%'");
		return Redirect::route("store")->withstore($store);
	}
	
// 	public function hello(){
// 		return "Hello World";
// 	}

}
