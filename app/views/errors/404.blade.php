<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:14 GMT -->
<head>
    
    <title>Loriette HTML5 Template</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    <link rel="stylesheet" type="text/css" href="{{asset('_libs/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('_libs/demo-switcher/demo-switcher.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('_libs/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('_css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('_css/colors/green.css')}}"/>      

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

    <!--
    header
    -->
    <header data-menu-autostart="false">
    
        <!--
        header content
        -->
        <div class="header-content">
        
            <div class="center">
            
                <!--
                logo
                -->
                <div class="left">
                
                    <a href="index-2.html"><img src="_assets/_img/logo.png" alt="" /></a>
                    <div class="header-slogan">HTML5 template <span>for florists</span></div>
                                 
                </div>
                
                <!--
                contact informations
                -->
                <div class="right">
                
                    <div class="padding">

                        <h3>Do you have <span>any question?</span></h3>
                        
                        <p>Nunc ac venenatis velit. Integer tincidunt, turpis id bibendum convallis, dui arcu laoreet lectus, a tincidunt nulla lacus et lacus. Pellentesque dignissim urna consec tetur adipiscing elit aenean dapibus.</p>
                        <p class="action"><a href="index-2.html#contact" class="button button-green">Feel free to contact us!</a> <span>or call us: <strong>+156 98 541 565</strong></span></p>

                    </div>
                
                </div>
                
                <div class="clear">
                </div>
            
            </div>
        
        </div>
        
        <!--
        header menu
        -->
        <nav class="header-menu">

            <!--
            header menu for standard screens
            -->
            <ul class="menu menu-standard">
            
                <li><a href="{{route('home')}}#home">Home</a></li>
                <li><a href="{{route('home')}}#about-us">About us</a></li>
                <li><a href="{{route('home')}}#references">References</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="{{route('home')}}#our-bouquets">Our bouquets</a></li>
                <li><a href="{{route('home')}}#opening-hours">Opening hours</a></li>
                <li><a href="{{route('home')}}#pricing">Pricing</a></li>
                <li>
                
                    <a href="shop.html">Shop <i class="fa fa-caret-down"></i></a>
                
                    <!--
                    dropdown menu
                    -->
                    <ul class="sub-menu animated speed fadeInUp">
                    
                        <li><a href="shop-product.html">Single product</a></li>
                        <li><a href="shop-cart.html">Cart</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                    
                    </ul>
                
                </li>
                <li class="active"><a href="404.html">404</a></li>
                <li><a href="index-2.html#contact">Contact</a></li>
                <li>
                
                    <i class="fa fa-search"></i>
                    
                    <!--
                    search form
                    -->
                    <form class="search-form animated speed fadeInLeft">
                    
                        <input type="text" name="search" placeholder="Type and hit enter..." />
                    
                    </form>
                
                </li>
            
            </ul>
            
            <!--
            header menu for smaller screens (eg. mobile)
            -->
            <ul class="menu menu-responsive">
            
                <li>
                
                    <a>Show menu <i class="fa fa-caret-down"></i> <i class="fa fa-caret-up"></i></a>
                    
                    <!--
                    dropdown menu
                    -->
                    <ul class="sub-menu animated speed fadeInUp">
                    
                        <li><a href="index-2.html#home">Home</a></li>
                        <li><a href="index-2.html#about-us">About us</a></li>
                        <li><a href="index-2.html#references">References</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="index-2.html#our-bouquets">Our bouquets</a></li>
                        <li><a href="index-2.html#opening-hours">Opening hours</a></li>
                        <li><a href="index-2.html#pricing">Pricing</a></li>
                        <li>
                        
                            <a href="shop.html"><i class="fa fa-caret-left"></i> Shop</a>
                        
                            <!--
                            dropdown menu
                            -->
                            <ul class="sub-menu animated speed fadeInUp">
                            
                                <li><a href="shop-product.html">Single product</a></li>
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                            
                            </ul>
                        
                        </li>
                        <li class="active"><a href="404.html">404</a></li>
                        <li><a href="index-2.html#contact">Contact</a></li>
                    
                    </ul>
                
                </li>
                
                <li>
                
                    <i class="fa fa-search"></i>
                    
                    <!--
                    search form
                    -->
                    <form class="search-form animated speed fadeInLeft">
                    
                        <input type="text" name="search" placeholder="Type and hit enter..." />
                    
                    </form>
                
                </li>
            
            </ul>
        
        </nav>
        
        <!--
        header show / hide button
        -->
        <div id="menu-button">
        
            <i class="fa fa-reorder"></i>
        
        </div>
    
    </header>
    
    <!--
    content
    -->
    <div id="content">

        <!--
        header
        -->
        <div class="image-header" style="background-image: url( '_assets/_img/florist-working-in-a-store.jpg' );">
        
            <div class="image-header-content">
            
                <h1>Ooops! <span>Nothing found here...</span></h1>
                
                <!--
                breadcrumbs
                -->
                <div class="breadcrumbs">
                
                    <a href="index-2.html">Home</a>
                    <span class="divider">/</span>
                    404 - Page not found
                
                </div>
            
            </div>
        
        </div>
        
        <div class="center">

            <!--
            error 404: page not found
            -->
            <section class="not-found">

                <div class="back-to-home-page">
                
                    <a href="index-2.html" class="button button-left-arrow button-green">Back to home page<a>
                
                </div>

                <div class="padding">
                
                    <h2>404</h2>
                    <p>Sorry, but we couldn't found the page you are looking for. Please make sure you've typed the URL correctly, also you may want to search for what you are looking for here:</p>
                    
                    <form class="search-form">
                    
                        <input type="text" name="search" placeholder="Type and hit enter..." />
                    
                    </form>
                
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

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{asset('_libs/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('_libs/smoothscroll.js')}}"></script>
    <script src="{{asset('_libs/demo-switcher/demo-switcher.js')}}"></script>
    <script src="{{asset('_js/functions.js')}}"></script>
    
    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1476325629301808&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

</body>

<!-- Mirrored from demo.martanian.com/html/loriette/florists/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:14 GMT -->
</html>