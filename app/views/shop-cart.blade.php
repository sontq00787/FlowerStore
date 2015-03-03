@extends('layouts.shop-cart')

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

@section('cart-products')
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

@section('cart-subtotals')
    @if(isset($total))
        <h4>Subtotal: <span class="subtotal">{{number_format($total)}} VND</span></h4>
    @endif
@stop

@section('shop-cart')
	@if(isset($cart))
		@foreach($cart as $row)
			<!--
            single cart item
            -->
		    <tr class="cart-item">
      			<!--
                product thumbnail
                -->
                <td class="product-thumbnail">
                    <div class="thumbnail" style="background-image: url( '{{$row->options->has('image') ? $row->options->image:''}}' );"></div>
                </td>
      
                <!--
                product name
                -->
      			<td class="product-name">
      				<a href="{{URL::route('shop-product-with-param', $row->id)}}">{{{$row->name}}}</a>
                    <!--
                    shop product stars
                    -->
                    <span class="stars stars-up">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </span> 
                </td>
      
                <!--
                product price
                -->
      			<td class="product-price">{{number_format($row->price)}} VND</td>
      					
                <!--
                quantity
                -->
                <td class="product-quantity" id="{{$row->id}}">
                
                    <span class="quantity-minus">-</span>
                    <span class="quantity-value">{{$row->qty}}</span>
                    <span class="quantity-plus">+</span>
                
                </td>	
                
                <!--
                subtotal
                -->
      			<td class="product-subtotal">{{number_format($row->subtotal)}} VND</td>
                
                <!--
                remove button
                -->
                <td class="product-remove">
                    <a href="{{URL::route('shop-cart-remove-id', $row->id)}}" class="remove" title="Remove this item">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
		@endforeach
	@endif
@stop

@section('shop-cart-total')
	@if(isset($total))
    	<td><span class="amount">{{number_format($total)}} VND</span></td>
    @else
    	<td><span class="amount">0.00 VND</span></td>
    @endif
@stop