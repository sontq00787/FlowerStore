<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:13 GMT -->
<head>
    
    <title>Loriette HTML5 Template</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    @include("include/header")
    <link rel="shortcut icon" href="{{asset('_img/rose.ico')}}" type="image/x-icon">
</head>
<body>

    <!--
    loader
    -->
    <div id="loader">
    
        <div id="circleG">

            <div id="circleG_1" class="circleG"></div>
            <div id="circleG_2" class="circleG"></div>
            <div id="circleG_3" class="circleG"></div>
        
        </div>

    </div>

    @include("include/menu")
    
    <!--
    content
    -->
    <div id="content">

        <!--
        header
        -->
        <div class="small-image-header" style="background-image: url( '_img/florist-working-in-a-store.jpg' ); background-position: 50% 66%;">

            <div class="small-image-header-content">
            
                <h1>Bouquets and <span>home decorations</span></h1>
                
                <!--
                breadcrumbs
                -->
                <div class="breadcrumbs">
                
                    <a href="{{URL::route('home')}}">Home</a>
                    <span class="divider">/</span>
                    Shop
                
                </div>
            
            </div>
        
        </div>
        
        <div class="center">

            <!--
            shop
            -->
            <section class="shop">
            
                <!--
                shop content
                -->
                <div class="shop-content">

                    <div class="shop-products-list">
                        @yield('product-list')
                        
                        <!--
                        shop important facts
                        -->
                        <div class="shop-important-facts">
         
                            <div class="padding">
                            
                                <h3>Important facts:</h3>
                                <p><i class="fa fa-paper-plane-o"></i> Free delivery for all orders with more than $100.00 value!</p>
                                <p><i class="fa fa-heart-o"></i> More than 1.000 happy customers!</p>
                                <p><i class="fa fa-truck"></i> Fast, less than 24h delivery!</p>
                            
                            </div>
                        
                        </div>
                        
                        <!--
                        shop navigation
                        -->
                        <div class="shop-navigation">
                        
                            <div class="padding">
    
                                <p class="left"><a href="#">&laquo; Previous products</a></p>
                                <p class="right"><a href="#">Next products &raquo;</a></p>
                                
                                <div class="clear">
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                <!--
                shop sidebar
                --> 
                <div class="shop-sidebar">

                    <!--
                    shop single widget: cart
                    -->
                    <div class="widget widget-cart">

                        <div class="padding">
                            
                            <div class="h3-line">
                        
                                <h3>Cart <span>summary</span></h3>
                                
                            </div>
                            @yield('shop-products')
                            @yield('shop-subtotals')
                        
                        </div>
                    
                    </div>
                   
                    <!--
                    shop single widget: products categories
                    -->
                    <div class="widget">

                        <div class="padding">
                            
                            <div class="h3-line">
                        
                                <h3>Products <span>categories</span></h3>
                                
                            </div>
                            
                            <ul>
                            
                                <li><a href="shop.html">Bouquets</a></li>
                                <li><a href="shop.html">Home decorations</a></li>
                                <li><a href="shop.html">Single flowers</a></li>
                                <li><a href="shop.html">Promotions</a></li>
                            
                            </ul>
                            
                        </div>
                
                    </div>
                    
                    <!--
                    shop single widget: emergency call
                    -->
                    <div class="widget">
                    
                        <div class="padding">

                            <div class="h3-line">
                        
                                <h3>Presale <span>questions?</span></h3>
                                
                            </div>

                            <div class="phone">+156 98 541 565</div>
                        
                        </div>
                    
                    </div>
                    
                    <!--
                    shop single widget: best products
                    -->
                    <div class="widget">
                
                        <div class="padding">
                        
                            <div class="h3-line">
                            
                                <h3>Our <span>bouquets</span></h3>
                            
                            </div>
                            
                            <!--
                            recommended products list
                            -->
                            <ul class="recommended-products">
                            
                                <li>
                                
                                    <div class="product-data">
                                    
                                        <a href="shop-product.html">Red tulips</a>
                                        <div class="data">143 recommendations!</div>
                                        <div class="line"></div>
                                    
                                    </div>
                                
                                </li>
                                
                                <li>
                                
                                    <div class="product-data">
                                    
                                        <a href="shop-product.html">Wedding bouquet</a>
                                        <div class="data">97 recommendations!</div>
                                        <div class="line"></div>
                                    
                                    </div>
                                
                                </li>
                                
                                <li>
                                
                                    <div class="product-data">
                                    
                                        <a href="shop-product.html">Beautiful roses</a>
                                        <div class="data">77 recommendations!</div>
                                    
                                    </div>
                                
                                </li>
                            
                            </ul>
                        
                        </div>
                    
                    </div>

                </div>
                
                <div class="clear">
                </div>
            
            </section>
            
            <!--
            facebook
            -->
            <section class="facebook">
            
                <i class="fa fa-thumbs-o-up"></i>
                
                <h3>Like us on Facebook!</h3>
                <div class="fb-like" data-href="https://facebook.com/themeforest" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                
            </section>

            <!--
            contact
            -->
            <section class="contact" data-section-name="contact">
            
                <div class="left">
                
                    <div class="padding">
                    
                        <!--
                        google map
                        -->
                        <div id="google-map">
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="right">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>Feel free to <span>contact us!</span></h3>
                        
                        </div>
                        
                        <p>Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Donec pulvinar lacus sed lacus congue tincidunt, consec tetur adipiscing elit.</p>
                        
                        <!--
                        contact form
                        -->
                        <form method="post" id="contact-form">
                        
                            <!--
                            notice after sending contact form
                            -->
                            <div class="confirm">
                            
                                <div class="notice">Your message has been sent successfully. Thank you!</div>
                            
                            </div>
                            
                            <input type="text" name="name" placeholder="Name and surname..." />
                            <input type="text" name="email" placeholder="Email..." />
                            <input type="text" name="phone" placeholder="Phone..." class="input-right" />
                                                                                                      
                            <textarea name="message" placeholder="Message..." rows="5" cols="10"></textarea>
                            
                            <p class="action"><button type="button" class="button button-green" name="send-contact-form">Send message</button> <span>or call us: <strong>+156 98 541 565</strong></span></p>
                            
                            <div class="clear">
                            </div>
                        
                        </form>
                    
                    </div>
                
                </div>
                
                <div class="clear">
                </div>
            
            </section>
            
            <!--
            footer
            -->
            <footer>
            
                <!-- 
                single footer element
                -->
                <div class="footer-element">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Always <span>fresh flowers</span></h3>
                        
                        </div>
                        
                        <p>Nunc ac venenatis velit. Integer tincidunt, turpis id bibendum convallis, dui arcu laoreet lectus.</p>
                        <p>Donec pulvinar lacus sed lacus congue tincidunt.</p>
                        <p><a href="index-2.html#references">Read our references</a>.</p>
                    
                    </div>
                
                </div>
                
                <!-- 
                single footer element
                -->
                <div class="footer-element">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Delivery of <span>bouquets</span></h3>
                        
                        </div>
                        
                        <p>Donec pulvinar lacus sed lacus congue tincidunt. Donec ultrices, leo ac tincidunt tincidunt.</p>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</p>
                        <p>Go to <a href="shop.html">our shop</a>.</p>
                    
                    </div>
                
                </div>
                
                <!-- 
                single footer element
                -->
                <div class="footer-element">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Last <span>news</span></h3>
                        
                        </div>
                        
                        <ul>
                        
                            <li><a href="blog-single.html">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="blog-single.html">Ut a dui in enim lacinia tempor</a></li>
                            <li><a href="blog-single.html">Vivamus tempus dolor</a></li>
                            <li><a href="blog-single.html">Donec dictum ut purus vitae</a></li>
                            <li><a href="blog-single.html">Donec in risus nunc.</a></li>
                        
                        </ul>
                        
                        <p>Want more? Go to <a href="blog.html">our blog</a>.</p>
                    
                    </div>
                
                </div>
                
                <!-- 
                single footer element
                -->
                <div class="footer-element footer-element-last">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Company <span>data</span></h3>
                        
                        </div>
                        
                        <p class="company-name"><strong>Your Florist Inc.</strong></p>
                        <p>Cross Street 1<br /> Singapore</p>
                        <p class="company-contact-data">Phone: <strong>+98 765 432 1023</strong><br />Mail: <strong>support@martanian.com</strong><br /> Web: <strong>yourexampleflorist.com</strong></p>
                        <p class="company-social"><a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></p>
                    
                    </div>
                
                </div>
            
            </footer>
        
        </div>
    
    </div>

    @include("include.footer")

</body>

<!-- Mirrored from demo.martanian.com/html/loriette/florists/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:13 GMT -->
</html>