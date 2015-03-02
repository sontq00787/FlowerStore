@extends('layouts.index')

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

@section('findstore')
	{{Form::open(array('url'=>'findstore','method'=>'post'))}}
        <div>                                                        
            <select class="select-menu" name="post">
                <option value="">Select a city...</option>
                <option value="Ho Chi Minh">Thành phố Hồ Chí Minh</option>
                <option value="Ha Noi">Thủ đô Hà Nội</option>
            </select>
        </div>
                        
        <div>
            <select class="select-menu" name="pre">
                <option value="">Select a state...</option>
                <option value="Tan Binh">Tan Binh</option>
            </select>
        </div>
        {{Form::token()}}
        <div>
            <input id="find-store-button" class="button button-green" type="submit" style="margin: 15px 100px;" value="Find Store"/>
        </div>
    {{Form::close()}}
@stop

@section('products')
    @if(isset($products))

        @foreach($products as $product)
            <!--
            single product
            -->
            <div class="products-element">

                <div class="padding">
                
                    <!--
                    single product image
                    -->
                    <div class="products-element-image" style="background-image: url( '{{$product->image}}' );">
                    </div>
                
                    <h3>
                    
                        <a href="{{URL::route('shop-product-with-param', array($product->id))}}">{{{$product->name}}}</a>
                    
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
                    
                    <!--
                    actions
                    -->
                    <p class="actions">
                        @if($product->amount_changed != 0.00) 
                            <strike style="color:red; font-size:14px">{{$product->amount}}</strike> <small>VND</small>
                            <br>
                            <p style="color:green; font-size:20px">{{$product->amount_changed}} <small>VND</small></p>
                        @else
                            <strike></strike>
                            <br>
                            <p style="color:green; font-size:20px">{{$product->amount}} <small>VND</small></p>
                        @endif
                        <a href="{{URL::route('shop-cart-with-id', $product->id)}}" class="add-to-cart">Add to cart</a></p>
                                    
                </div>
            
            </div>
        @endforeach
    @else
    <div class="products-element">
        <div class="padding">
            <h3>Just now, we're empty.</h3>
        </div>
    </div>
    @endif
@stop
