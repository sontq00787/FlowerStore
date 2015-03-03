@extends('layouts.shop')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('shop-products')
	
	@if(isset($cart))
		@if(sizeof($cart) > 0)
		<ul class="cart-products">
			@foreach($cart as $row)
				<li>
	                      
			        <div class="product-data">

			            <a href="{{URL::route('shop-product-with-param', $row->id)}}">{{{$row->name}}}</a>
			            <div class="data">{{$row->qty}} x {{number_format($row->price)}} VND</div>
			            <div class="line"></div>

			        </div>

			    </li>
		    @endforeach
		    </ul>
		@else
			<p>Your cart is empty.</p>
		@endif
    @else

    	<p>Your cart is empty.</p>
    @endif
    
@stop

@section('shop-subtotals')
	@if(isset($total))
		<h4>Subtotal: <span class="subtotal">{{number_format($total)}} VND</span></h4>
	@endif
@stop

@section('product-list')
	@if(isset($products))
		@if(sizeof($products) >0)
			@foreach($products as $product)
				<!--
			    shop single product
			    -->
			    <div class="shop-single-product">

			        <div class="padding">
			        
			            <!--
			            shop single product image
			            -->
			            <div class="shop-single-product-image" style="background-image: url( '{{$product->image}}' );">
			            </div>

			            <h3>
			            
			                <a href="shop-product.html">{{{$product->name}}}</a>
			                
			                <!--
			                shop product stars
			                -->
			                <span class="stars">
			                
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star"></i>
			                    <i class="fa fa-star-half-o"></i>
			                
			                </span>
			            
			            </h3>
			            
			            <p>{{{$product->short_description}}}</p>
			            <p class="actions">
			            	@if($product->amount_changed >0.00) 
	                            <strike style="color:red; font-size:14px">{{$product->amount}} VND</strike> 
	                            <span style="color:green; font-size: 20px">{{$product->amount_changed}} VND</span>
	                        @else
	                            <span style="color:green; font-size: 20px">{{$product->amount}} VND</span>
	                        @endif
			             <a href="{{URL::route('shop-cart-with-id', $product->id)}}" class="add-to-cart">Add to cart</a></p>
			                            
			        </div>
			    
			    </div>
		    @endforeach
		@else
	    	<div class="shop-single-product">

		        <div class="padding">
		        
		            <h3>
		                No products
		            </h3>
		                         
		        </div>
		    
		    </div>
	    @endif
    @endif
@stop