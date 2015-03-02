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
		$product = DB::table('product')->orderBy('created_at')->take(8)->get();
		return View::make('index')->with('products', $product);
	}

	public function getFindStore(){
		$pre = Input::get('pre');
		$post = Input::get('post');
		$count = DB::select("SELECT * FROM store WHERE address LIKE '%".$pre."%' AND address LIKE '%".$post."%'");
		return Redirect::route("store")->withStore($count)->withcount(count($count));
	}

	public function getShopProduct(){
		if(Session::has('product')) {
			return View::make('shop-product')->with('product', Session::get('product'));
		}
		$product = DB::select("SELECT * FROM product WHERE id = (SELECT MAX(id) FROM product)");
		return Redirect::route('shop-product')->withproduct($product);
	}

	public function getShopProductWithParam($id){
		$product = DB::select("SELECT * FROM product WHERE id = ".$id);
		return Redirect::route('shop-product')->withproduct($product);
	}

	public function apiSearch(){
		$query = e(Input::get("search",''));

		if(!$query && $query == "") return Response::json(array(), 400);

		$products = Product::where('availability', 1)
				->where('name','like', '%'.$query.'%')
				->orderBy('name','asc')
				->take(5)
				->get(array('name','image'))->toArray();

		$categories = Category::where('name','like', '%'.$query.'%')
				->has('product')
				->take(5)
				->get(array('name'))
				->toArray();

		$data = array_merge($products, $categories);

		return Response::json(array(
			'data'=>$data
		));

	}

	public function appendValue($data, $type, $element)
	{
		// operate on the item passed by reference, adding the element and type
		foreach ($data as $key => & $item) {
			$item[$element] = $type;
		}
		return $data;		
	}

	public function appendURL($data, $prefix)
	{
		// operate on the item passed by reference, adding the url based on slug
		foreach ($data as $key => & $item) {
			$item['url'] = url($prefix.'/'.$item['slug']);
		}
		return $data;		
	}

	public function getFindProduct(){
		$query = e(Input::get("search"));

		if(!$query && $query == "") return Redirect::route('home');
		
		$products = Product::where('availability', 1)
				->where('name','like', '%'.$query.'%')
				->orderBy('name','asc')
				->get(array('id','name','amount', 'amount_changed', 'short_description','image'));

		return Redirect::route('shop')->withproduct($products);
	}
}
