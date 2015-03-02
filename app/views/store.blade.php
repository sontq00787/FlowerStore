@extends('layouts.store')

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

@section('store-products')
    @if(isset($cart))
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
@stop

@section('store-subtotals')
    @if(isset($total))
        <h4>Subtotal: <span class="subtotal">{{number_format($total)}} VND</span></h4>
    @endif
@stop

@section('shop-product-list')
	@if(Session::has('store'))
        @if(Session::has('count') && Session::get('count') > 0)
    		@foreach(Session::get('store') as $store)
    			<div class="shop-single-product">
                    <div class="padding">                            
                        <h3>
                            <a href="{{URL::route('shop-product-with-param', $row->id)}}">{{{$store->name}}}</a>
                            <p>{{{$store->address}}}</p>
                            <!--
                            shop product stars
                            -->
                            <span class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <!--
                        shop single product image
                        -->
                        <div style="float:left; width:100%">
                            <div class="shop-single-product-image" style="background-image: url( '{{$store->image}}' );">
                            </div>
                            <!--
                            shop important facts
                            -->
                            <div class="shop-important-facts">
             
                                <div class="padding">
                                    <p><i class="fa fa-paper-plane-o"></i> Free delivery for all orders!</p>
                                    <p><i class="fa fa-heart-o"></i> More than 1.000 happy customers!</p>
                                    <p><i class="fa fa-truck"></i> Fast, less than 24h delivery!</p>
                                
                                </div>
                            
                            </div>
                            <!--buttom goto -->
                            <a href="{{URL::route('shop')}}" class="button button-green" style="margin-top:50px; float:right">Go To Menu</a>
                        </div>
                    </div>
                </div>
    		@endforeach
        
        @else
            <div class="shop-single-product">
                <div class="padding">
                    <h2>
                        I'm so sorry
                    </h2>
                    <!--
                    shop single product image
                    -->
                    <div style="float:left; height:100%; width:100%">

                        shop important facts
                        -->
                        <div class="shop-important-facts">
         
                            <div class="padding">
                                <h4>No results</h4>
                            </div>
                        
                        </div>
                        <!--buttom goto -->
                        <a href="{{URL::route('home')}}" class="button button-green" style="margin-top:50px; float:right">Go Home</a>
                    </div>
                </div>
            </div>
        @endif
	@else
        @if(isset($store))
            @foreach($store as $row)
                <div class="shop-single-product">
                    <div class="padding">                            
                        <h3>
                            <a href="{{URL::route('shop-product-with-param', $row->id)}}">{{{$row->name}}}</a>
                            <p>{{{$row->address}}}</p>
                            <!--
                            shop product stars
                            -->
                            <span class="stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </span>
                        </h3>
                        <!--
                        shop single product image
                        -->
                        <div style="float:left; width:100%">
                            <div class="shop-single-product-image" style="background-image: url( '{{$row->image}}' );">
                            </div>
                            <!--
                            shop important facts
                            -->
                            <div class="shop-important-facts">
             
                                <div class="padding">
                                    <p><i class="fa fa-paper-plane-o"></i> Free delivery for all orders!</p>
                                    <p><i class="fa fa-heart-o"></i> More than 1.000 happy customers!</p>
                                    <p><i class="fa fa-truck"></i> Fast, less than 24h delivery!</p>
                                </div>
                            
                            </div>
                            <!--buttom goto -->
                            <a href="{{URL::route('shop')}}" class="button button-green" style="margin-top:50px; float:right">Go To Menu</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
    		<div class="shop-single-product">
                <div class="padding">
                    <h2>
                        I'm so sorry
                    </h2>
                    <!--
                    shop single product image
                    -->
                    <div style="float:left; height:100%; width:100%">

                        shop important facts
                        -->
                        <div class="shop-important-facts">
         
                            <div class="padding">
                                <h4>No results</h4>
                            </div>
                        
                        </div>
                        <!--buttom goto -->
                        <a href="{{URL::route('home')}}" class="button button-green" style="margin-top:50px; float:right">Go Home</a>
                    </div>
                </div>
            </div>
        @endif
	@endif
@stop