@extends('layouts.shop-product')

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
@section('s-products')
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

@section('s-subtotals')
    @if(isset($total))
        <h4>Subtotal: <span class="subtotal">{{number_format($total)}} VND</span></h4>
    @endif
@stop
@section('summary')
	@if(isset($product))
	<!--
    shop content
    -->
    <div class="shop-content">

        <!--
        shop product box
        -->
        <div class="shop-product">

            <div class="padding">
            
                <!--
                shop product images
                -->
                <div class="shop-product-images">
                
                    <!--
                    shop product images switch
                    -->
                    <div class="shop-product-images-switch">
                    
                        <div class="shop-product-images-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="shop-product-images-next"><i class="fa fa-angle-right"></i></div>
                    
                    </div>
                        
                    <!--
                    shop product single image
                    -->
                    <div class="shop-product-single-image" style="background-image: url( '{{{$product[0]->image}}}' );">
                    </div>
                    
                    <!--
                    shop product single image
                    -->
                    <div class="shop-product-single-image" style="background-image: url( '_img/flower-shop-in-gorinchem-netherlands.jpg' );">
                    </div>
                    
                </div>
                <!--
                shop product description
                -->
                <div class="shop-product-description">
                    
                    <h3>
                    
                        <a href="{{URL::route('shop-product-with-param', $product[0]->id)}}">{{{$product[0]->name}}}</a>
                        
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
                    
                    <p class="actions">
                        @if($product[0]->amount_changed >0.00) 
                            <strike style="color:red; font-size:14px">{{$product[0]->amount}} VND</strike> 
                            <span style="color:green; font-size: 20px">{{$product[0]->amount_changed}} VND</span>
                        @else
                            <span style="color:green; font-size: 20px">{{$product[0]->amount}} VND</span>
                        @endif
                        <a href="{{URL::route('shop-cart-with-id', $product[0]->id)}}" class="add-to-cart">Add to cart</a>
                    </p>
                    <p>{{{$product[0]->introduction}}}</p>

                </div>
                
                <div class="clear">
                </div>
                                
            </div>
        
        </div>

        <!--
        shop product tabs
        -->
        <div class="shop-product-tabs">

            <!--
            shop product tabs switcher
            -->
            <div class="shop-product-tabs-switcher">
            
                <button class="button button-green active" data-tab-name="description">Description</button>
                <button class="button button-gray" data-tab-name="additional-informations">Additional informations</button>
                <button class="button button-gray" data-tab-name="reviews">Reviews (2)</button>
            
            </div>
        
            <!--
            shop product tabs content
            -->
            <div class="shop-product-tabs-content">
            
                <!--
                shop product tabs: description
                -->
                <div class="shop-product-tabs-single-tab" data-tab-name="description">
                
                    <div class="padding">
                    
                        <p>{{{$product[0]->description}}}</p>

                    </div>

                </div>
                
                <!--
                shop product tabs: additional informations
                -->
                <div class="shop-product-tabs-single-tab" data-tab-name="additional-informations">
                
                    <div class="padding">
                    
                        <table>
                        
                            <tr>
                            
                                <td>Weight</td>
                                <td>{{{$product[0]->weight}}}</td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Dimensions</td>
                                <td>{{{$product[0]->dimensions}}}</td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Color</td>
                                <td>{{{$product[0]->color}}}</td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Guarantee</td>
                                <td>{{{$product[0]->guarantee}}}</td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Tags</td>
                                <td><a href="#">Decoration</a>, <a href="#">Home</a>, <a href="#">Flowers</a>, <a href="#">Fresh</a></td>
                       
                            </tr> 
                            
                            <tr>
                            
                                <td>Buyers rating</td>
                                <td>
                                
                                    <span class="stars">
                        
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    
                                    </span>
                                
                                </td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Availability</td>
                                <td>
                                    @if($product[0]->availability == 0)
                                        Out stock
                                    @else
                                        In stock
                                    @endif
                                </td>
                       
                            </tr>
                            
                            <tr>
                            
                                <td>Made in</td>
                                <td>{{{$product[0]->madein}}}</td>
                       
                            </tr>
                        
                        </table>

                    </div>
                    
                    <!--
                    shop important facts
                    -->
                    <div class="shop-important-facts-horizontal">

                        <div class="padding">
                        
                            <p><i class="fa fa-paper-plane-o"></i> Free delivery for all orders with more than $100.00 value!</p>
                            <p><i class="fa fa-heart-o"></i> More than 1.000 customers recommend us!</p>
                            <p class="important-last"><i class="fa fa-truck"></i> Fast, less than 24h delivery for all our products!</p>
                        
                        </div>
                    
                    </div>

                </div>
                
                <!--
                shop product tabs: reviews
                -->
                <div class="shop-product-tabs-single-tab comments" data-tab-name="reviews">

                    <!--
                    show reply form to reviews
                    -->
                    <button class="button button-green shop-show-reply-form">Add your review</button>
                    
                    <div class="padding">

                        <div class="comments-box">
                        
                            <!--
                            comments list
                            -->
                            <ol class="comments-list">
                            
                                <li>
                    
                                    <div class="comment-author-avatar"><img alt="" src="_img/avatar.png" height="40" width="40"></div>
                                    <div class="comment-container">
                                    
                                        <div class="comment-author-info">
                                        
                                            <div class="comment-author-name">
                                            
                                                <span class="name">John Doe</span><a class="comment-reply-link" href="#">Reply</a>                    
                                            
                                            </div>
                        
                                            <time datetime="2014-09-10T16:19:00+00:00">September 10, 2014 at 4:19 pm</time>
    
                                        </div>
                        
                                        <div class="comment-content">
                                        
                                            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi non sem mollis tortor rhoncus fringilla. Nulla congue, lorem eget sollicitudin placerat, ante tortor tempus ipsum, non vehicula arcu tortor sed augue. Vestibulum gravida fringilla turpis ut volutpat.</p>
                                            <p>Pellentesque tincidunt suscipit neque non luctus. Integer ut nibh sed massa ullamcorper suscipit. Nullam facilisis varius accumsan. Vestibulum venenatis elit lorem.</p>
                                            
                                        </div>
                        
                                    </div>    
                        
                                </li>
    
                                <li>
                        
                                    <div class="comment-author-avatar"><img alt="" src="_img/avatar.png" height="40" width="40"></div>
                                    <div class="comment-container">
                                    
                                        <div class="comment-author-info">
                                        
                                            <div class="comment-author-name">
                                            
                                                <span class="name">Richie Rich</span><a class="comment-reply-link" href="#">Reply</a>                    
                                            
                                            </div>
                        
                                            <time datetime="2014-09-10T16:05:00+00:00">September 10, 2014 at 4:05 pm</time>
    
                                        </div>
                        
                                        <div class="comment-content">
                                        
                                            <p>Vivamus tristique, libero et facilisis suscipit, leo velit imperdiet dolor, quis sagittis justo ligula at turpis. Donec ut nisl in enim laoreet dictum. Nam non risus ac diam convallis lacinia non quis dui.</p>
                                            <p>Aliquam ut sapien sapien. Vivamus commodo eros id dolor faucibus dapibus. Duis eu arcu in nulla malesuada elementum nec dignissim erat.</p>
                                            
                                        </div>
                        
                                    </div>

                                </li>
    
                            </ol>
                            
                            <!--
                            paginate comments links
                            -->
                            <div class="paginate-comments-links">
                            
                                <p class="left"><a href="#">&laquo; Newer reviews</a></p>
                                <p class="right"><a href="#">Older reviews &raquo;</a></p>
                                
                                <div class="clear">
                                </div>
                            
                            </div>
                       
                        </div>
                        
                    </div>
                    
                    <!--
                    comments reply box
                    -->
                    <div class="comments-reply">
                    
                        <div class="padding">
                        
                            <h2><i class="fa fa-comments-o"></i>Leave a review</h2>

                            <!--
                            alert
                            -->
                            <div class="alert-box alert-yellow">
                            
                                <p>Your email address will not be published, and your website url is not required.</p>
                            
                            </div> 
                        		
                            <!--
                            comments reply form
                            -->
                            <form method="post" class="blog-post-comments-reply-form">
                        
                                <input type="text" name="name" placeholder="Name...">
                                <input type="text" name="email" placeholder="E-mail...">
                                <input type="text" name="website" placeholder="Website...">
                                <textarea placeholder="Review..." name="review"></textarea>
    
                                <div class="send">
                                
                                    <button name="send" type="button" class="button button-green">Post review!</button>
                                    
                                    <div class="clear">
                                    </div>
                                
                                </div>
                        		
                            </form>  
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>

    </div>
    @else
    @endif
@stop