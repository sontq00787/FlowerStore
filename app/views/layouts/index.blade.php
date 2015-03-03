<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:47:38 GMT -->
<head>
    
    <title>Loriette HTML5 Template</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    @include("include/header")
    <link rel="shortcut icon" href="{{asset('_img/rose.ico')}}" type="image/x-icon">
    <!-- {{HTML::style('_css/selectize/selectize.bootstrap3.css')}} -->
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
    gallery popup
    -->
    <div id="gallery-popup">
                
        <div class="gallery-popup-background">
        </div>
        
        <div class="gallery-popup-content animated speed bounceInDown">

            <!--
            close button
            -->
            <button id="close-gallery-popup" class="button button-gray button-right-arrow"><i class="fa fa-times"></i></button>

            <!--
            left gallery side
            -->
            <div class="left">
            
                <div class="padding">
                
                    <div class="left-up">
                     
                        <div class="h3-line">
                                    
                            <h3>Our <span>bouquets</span></h3>
                        
                        </div>
                        
                        <p>Select our bouquets category from the list below.</p>
                        
                        <!--
                        select: patients
                        -->
                        <span class="custom-dropdown">
    
                            <select class="custom-dropdown-select" name="gallery-thumbnails-category">
        
                                <option value="*">All bouquets</option>
                                <option value="wedding-bouquets">Wedding bouquets</option>
                                <option value="single-flowers">Single flowers</option>
                                <option value="home-decorations">Home decorations</option>
                            
                            </select>
                            
                        </span>
                        
                        <!--
                        divider
                        -->
                        <hr />
                    
                    </div>
                    
                    <!--
                    thumbnails
                    -->
                    <div class="gallery-thumbnails">
                    
                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="single-flowers">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/beautiful-orange-red-tulips-on-grey-background.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Red tulips, <span>perfect gift for your wife!</span></div>
                        
                        </div>
                        
                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="wedding-bouquets">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/background-of-the-wedding-bouquet.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Wedding bouquet, <span>for individual orders</span></div>
                        
                        </div>
                        
                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="wedding-bouquets">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/roses.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Beautiful roses, <span>the perfect gift</span></div>
                        
                        </div>
                        
                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="home-decorations">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/old-bicycle.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Old bicycle with flowers, <span>great for spring rides</span></div>
                        
                        </div>

                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="single-flowers">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/florist-hands-showing-red-roses-bouquet-flowers.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Roses bouquet, <span>the special gift</span></div>
                        
                        </div>
                        
                        <!--
                        single gallery thumbnail
                        -->
                        <div class="gallery-thumbnail" data-thumbnail-category="home-decorations">
                        
                            <div class="gallery-thumbnail-image" style="background-image: url( '{{asset('_img/flower.jpg')}}' );">
                            </div>
                        
                            <div class="gallery-thumbnail-title">Flowers pack, <span>great home decoration</span></div>
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>
            
            <!--
            right gallery side: current image
            -->
            <div class="gallery-current-image">
            
                <div class="gallery-prev-image"><i class="fa fa-angle-left"></i></div>
                <div class="gallery-next-image"><i class="fa fa-angle-right"></i></div>
                
                <div class="gallery-current-image-title">
                
                    <h3>Image title</h3>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

    @include("include/menu")
    
    <!--
    content
    -->
    <div id="content">  

        <!--
        full image header
        -->
        <div class="big-image-header" data-section-name="home">
        
            <div class="big-image-single" style="background-image: url( '{{asset('_img/happy-florist.jpg')}}' ); background-position: 50% 55%;">
            
                <div class="big-image-single-content">
                
                    <h4>Always fresh</h4>
                    <h1>Beautiful flowers!</h1>
                    
                    <hr />

                </div>
            
            </div>
        
        </div>
        
        <!--
        main content box (container)
        -->
        <div class="center">
        
            <!--
            four boxes
            -->
            <section class="four-boxes">
            
                <!--
                single box
                -->
                <div class="four-boxes-element" data-go-to="pricing">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Check out <span>our offer</span></h3>
                            
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
                        
                        <!--
                        single box image
                        -->
                        <div class="four-boxes-element-image" style="background-image: url( '{{asset('_img/florist-at-garden-centre-retail-inventory.jpg')}}' );">
                        </div>

                    </div>
                
                </div>
                
                <!--
                single box
                -->
                <div class="four-boxes-element four-boxes-element-last-when-responsive" data-go-to="our-bouquets">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                        
                            <h3>Our <span>bouquets</span></h3>
                        
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
                        
                        <!--
                        single box image
                        -->
                        <div class="four-boxes-element-image" style="background-image: url( '{{asset('_img/florist-hands-showing-red-roses-bouquet-flowers.jpg')}}' );">
                        </div>

                    </div>
                
                </div>
                
                <!--
                last two boxes will go bottom in responsive mode
                -->
                <div class="four-boxes-bottom">
                
                    <!--
                    single box
                    -->
                    <div class="four-boxes-element" data-go-to="references">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                            
                                <h3>Read our <span>references</span></h3>
                            
                            </div>
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
    
                            <!--
                            single box image
                            -->
                            <div class="four-boxes-element-image" style="background-image: url( '{{asset('_img/person-1.jpg')}}' );">
                            </div>
    
                        </div>
                    
                    </div>
                
                    <!--
                    single box
                    -->
                    <div class="four-boxes-element four-boxes-element-last" data-go-to="contact">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                            
                                <h3>Purchase <span>online</span></h3>
                            
                            </div>
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
    
                            <!--
                            single box image
                            -->
                            <div class="four-boxes-element-image" style="background-image: url( '{{asset('_img/florist-is-phoning.jpg')}}' );">
                            </div>
    
                        </div>
                    
                    </div>
                
                </div>
            
            </section>
            
            <!--
            slogan
            -->
            <section class="slogan">
            
                <h2>Always <span>fresh</span> flowers</h2>
                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. In at fermentum risus. Curabitur nec augue a felis.</p>
            
            </section>

            <!--
            box-text-with-image-left
            -->
            <section class="box-text-with-image-left" data-section-name="about-us">

                <div class="contents">
                
                    <!--
                    single content
                    -->
                    <div class="single-content">
                
                        <div class="left">
                        
                            <div class="padding">
                            
                                <div class="h3-line">
                                    
                                    <h3>Few words <span>about us</span></h3>
                                
                                </div>
            
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Curabitur nec augue a felis malesuada adipiscing in in turpis.</p>
                                <p>Maecenas ut ornare eros. Cras vitae nibh eget mauris placerat pellentesque a quis velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                
                                <h4>Why is it worth it?</h4>
                                <ul>
                                
                                    <li><i class="fa fa-check"></i> Odio nulla tempus elit. Consec tetur adipiscing elit aenean.</li>
                                    <li><i class="fa fa-check"></i> Aenean dapibus sollicitudin eros, donec pulvinar.</li>
                                    <li><i class="fa fa-check"></i> In tincidunt auctor urna, rutrum auctor lorem fringilla vitae.</li>
                                    <li><i class="fa fa-check"></i> Vivamus ac porta ligula. Sed non facilisis, lorem ipsum dolor sit elit.</li>
                                
                                </ul>
                                
                                <p class="action"><a href="{{URL::route('home')}}#references">Read our clients references</a></p>
                                
                            </div>
                        
                        </div>
        
                        <!--
                        background image
                        -->
                        <div class="right">
                                                  
                            <div class="padding">
                            
                                <div class="image" style="background-image: url( '{{asset('_img/colorful-bouquet-florist-woman-selling-customer-flower.jpg')}}' );">
                                </div>
                            
                            </div>                      
                                                  
                        </div>
                        
                        <div class="clear">
                        </div>
                    
                    </div>

                </div>

            </section>
            
            <!--
            products
            -->
            <section class="products">
                @yield('products')
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
            pricing
            -->
            <section class="pricing" data-section-name="pricing">
            
                <div class="left">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                    
                            <h3>Check out <span>our offer</span></h3>
                        
                        </div>
                        
                        <p>Choose one of our services to check the pricing list.</p>
                        
                        <!--
                        select: pricing category
                        -->
                        <span class="custom-dropdown">
    
                            <select class="custom-dropdown-select">
        
                                <option value="flowers">Flowers</option>
                                <option value="bouquets">Bouquets</option>
                            
                            </select>
                            
                        </span>
                    
                    </div>
                
                </div>
                
                <!--
                pricings contentes
                -->
                <div class="right">

                    <!--
                    single pricing
                    -->
                    <div class="single-pricing" data-pricing-name="flowers">
                    
                        <div class="padding">
                        
                            <h2>Flowers</h2>
                            <p>Maecenas ut ornare eros. Cras vitae nibh eget mauris placerat pellentesque a quis velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus.</p>
                            
                            <!--
                            pricing list on left side
                            -->
                            <ul class="pricing-left">
                            
                                <li>Fuchsia <span class="price">$0.35</span></li>
                                <li>Magnolia <span class="price">$1.20</span></li>
                                <li>Forgetmenot <span class="price">$0.25</span></li>
                                <li>Geranium <span class="price">$1.00</span></li>
                                <li>Orchid <span class="price">$0.60</span></li>
                                <li>Tulip <span class="price">$0.40</span></li>
                            
                            </ul>
                            
                            <!--
                            pricing list on right side
                            -->
                            <ul class="pricing-right">
                            
                                <li>Rose <span class="price">$1.30</span></li>
                                <li>Marigold <span class="price">$0.20</span></li>
                                <li>Nasturtim <span class="price">$0.35</span></li>
                                <li>Cornflower <span class="price">$1.70</span></li>
                                <li>Pasqueflower <span class="price">$1.25</span></li>
                                <li>Petunia <span class="price">$0.90</span></li>
                            
                            </ul>
                            
                            <div class="clear">
                            </div>
                        
                        </div>
                    
                    </div>
                    
                    <!--
                    single pricing
                    -->
                    <div class="single-pricing" data-pricing-name="bouquets">
                    
                        <div class="padding">
                        
                            <h2>Bouquets</h2>
                            <p>Maecenas ut ornare eros. Cras vitae nibh eget mauris placerat pellentesque a quis velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus.</p>
                            
                            <!--
                            pricing list on left side
                            -->
                            <ul class="pricing-left">
                            
                                <li>Roses bouquet <span class="price">from $19.00</span></li>
                                <li>Amaranthus with Calla <span class="price">$25.00</span></li>
                                <li>Bird of Paradise <span class="price">$30.00</span></li>
                            
                            </ul>
                            
                            <!--
                            pricing list on right side
                            -->
                            <ul class="pricing-right">
                            
                                <li>Chrysanthemum with Gardenia<span class="price">$15.00</span></li>
                                <li>Freesia, Gerbera and Roses <span class="price">$39.00</span></li>
                                <li>Orchid with Narcissus <span class="price">$13.00</span></li>
                            
                            </ul>
                            
                            <div class="clear">
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                <div class="clear">
                </div>
            
            </section>
            
        </div>
        
        <!--
        image section
        -->
        <div class="image-header image-header-between-sections" style="background-image: url( '{{asset('_img/flower.jpg')}}' );">
            
            <div class="image-header-content-center">
            
                <h2>Best <span>florist</span> in the city!</h2>
            
            </div>
        
        </div>
        
        <div class="center">    

            <!--
            promotion
            --> 
            <section class="promotion">

                <div class="promotions">

                    <!--
                    single promotion
                    -->
                    <div class="single-promotion" style="background-image: url( '{{asset('_img/roses-bouquet.jpg')}}' );">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                                        
                                <h3>Newest <span>promotion</span></h3>
                            
                            </div>
                            
                            <!--
                            promotion content
                            -->
                            <div class="promotion-content">
                            
                                <h2><span>15% off</span> for bouquets</h2>
                                <p>Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Donec pulvinar lacus sed lacus congue tincidunt, consec tetur adipiscing elit. Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros.</p>
                                
                                <!--
                                promotion action link
                                -->
                                <p class="action"><a href="{{URL::route('shop')}}" class="button button-green">Purchase online!</a> <span>available until <strong>15 October, 2014</strong></span></p>
                            
                            </div>
        
                        </div>
                    
                    </div>
 
                </div>

            </section>

            <!--
            gallery
            -->
            <section class="gallery" data-section-name="our-bouquets">

                <!--
                more gallery elements button
                -->
                <button class="gallery-all-elements button button-green">See more of our bouquets</button>
                
                <!--
                gallery elements
                -->
                <div class="gallery-elements">
                
                    <!--
                    single gallery element
                    -->
                    <div class="gallery-element gallery-element-first">
    
                        <div class="padding">
                        
                            <div class="gallery-element-image" style="background-image: url( '{{asset('_img/beautiful-orange-red-tulips-on-grey-background.jpg')}}' );">
                            </div>
                        
                            <h3>Red tulips</h3>
                            <p>Perfect gift for your wife!</p>
                  
                        </div>
                    
                    </div>
                    
                    <!--
                    single gallery element
                    -->
                    <div class="gallery-element gallery-element-last-when-responsive">
    
                        <div class="padding">
                        
                            <div class="gallery-element-image" style="background-image: url( '{{asset('_img/background-of-the-wedding-bouquet.jpg')}}' );">
                            </div>
                            
                            <h3>Wedding bouquet</h3>
                            <p>For individual orders</p>
                  
                        </div>
                    
                    </div>
                    
                    <!--
                    gallery bottom elements (for responsive)
                    -->
                    <div class="gallery-bottom">
                    
                        <!--
                        single gallery element
                        -->
                        <div class="gallery-element">
         
                            <div class="padding">
                            
                                <div class="gallery-element-image" style="background-image: url( '{{asset('_img/florist-hands-showing-red-roses-bouquet-flowers.jpg')}}' );">
                                </div>
                                
                                <h3>Beautiful roses</h3>
                                <p>The perfect gift</p>
             
                            </div>
                        
                        </div>
                        
                        <!--
                        single gallery element
                        -->
                        <div class="gallery-element gallery-element-last">
        
                            <div class="padding">
        
                                <div class="gallery-element-image" style="background-image: url( '{{asset('_img/old-bicycle.jpg')}}' );">
                                </div>
                                
                                <h3>Old bicycle with flowers</h3>
                                <p>Great for spring rides</p>
        
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>

            </section> 
            
            <!--
            references
            -->
            <section class="references" data-section-name="references">
            
                <i class="fa fa-comments-o"></i>
                
                <!--
                references contents
                -->
                <div class="reference-content">
                
                    <!--
                    single reference
                    -->
                    <div class="single-reference">
                    
                        <h2>Perfect flowers for my girlfriend!</h2>
                        <p>Donec pulvinar lacus sed lacus congue tincidunt. In at fermentum risus. Donec pulvinar lacus sed lacus congue tincidunt, consec tetur adipiscing elit.</p>
                        <p class="author">Tom Latch</p>
                    
                    </div>
                    
                    <!--
                    single reference
                    -->
                    <div class="single-reference">
                    
                        <h2>The best florist - my recommendation</h2>
                        <p>In at fermentum risus. Curabitur nec augue a felis malesuada adipiscing in in turpis. Lorem ipsum dolor sit amet, consec tetur adipiscing elit.</p>
                        <p class="author">John Doe</p>
                    
                    </div>
                
                </div>

            </section>

            <!--
            opening hours
            -->
            <section class="opening-hours" data-section-name="opening-hours" style="background-image: url( '{{asset('_img/clock.jpg')}}' );">
            
                <div class="left">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>See our <span>opening hours</span></h3>
                        
                        </div>
                        
                        <!--
                        opening hours for single day
                        -->
                        <div class="day-info">
                                              
                            <div class="day-info-single" data-day-name="mon">
                            
                                <h2>Monday</h2>
                                <h4>We're open from <span>8:15pm</span> to <span>2:15am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="tue">
                            
                                <h2>Tuesday</h2>
                                <h4>We're open from <span>8:00pm</span> to <span>3:00am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="wed">
                            
                                <h2>Wednesday</h2>
                                <h4>We're open from <span>8:45pm</span> to <span>3:15am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="thu">
                            
                                <h2>Thursday</h2>
                                <h4>We're open from <span>8:05pm</span> to <span>1:05am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="fri">
                            
                                <h2>Friday</h2>
                                <h4>We're open from <span>9:00pm</span> to <span>4:00am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="sat">
                            
                                <h2>Saturday</h2>
                                <h4>We're open from <span>9:15pm</span> to <span>1:25am</span></h4>
                            
                            </div>
                            
                            <div class="day-info-single" data-day-name="sun">
                            
                                <h2>Sunday</h2>
                                <h4 class="closed">We're closed</h4>
                            
                            </div>
                        
                        </div>
                        
                        <!--
                        days switcher
                        -->
                        <ul class="other-days">
                        
                            <li data-day-name="mon">Mon</li>
                            <li data-day-name="tue" class="active">Tue</li>
                            <li data-day-name="wed">Wed</li>
                            <li data-day-name="thu">Thu</li>
                            <li data-day-name="fri">Fri</li>
                            <li data-day-name="sat">Sat</li>
                            <li data-day-name="sun">Sun</li>
                        
                        </ul>
                    
                    </div>
                
                </div>
                
                <!--
                additional content on right side
                -->
                <div class="right">
                
                    <div class="padding">
                    
                        <div class="h3-line">
                                
                            <h3>Feel free to <span>contact us!</span></h3>
                        
                        </div>
                            
                        <div class="description">
                        
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Aenean dapibus sollicitudin eros. Donec pulvinar lacus sed lacus congue.</p>
                            <p>Odio nulla tempus elit. Consec tetur adipiscing elit aenean dapibus sollicitudin eros.</p>
                        
                        </div>
                        
                        <!--
                        phone data
                        -->
                        <div class="phone-data">
                        
                            <p class="phone">+156 98 541 565</p>
                            <p class="phone-details">Available in <span>opening hours.</span></p>
                        
                        </div>
                        
                        <div class="clear">
                        </div>

                    </div>
                
                </div>
                
                <div class="clear">
                </div>

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
                        <p><a href="{{URL::route('home')}}#references">Read our references</a>.</p>
                    
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

<!-- Mirrored from demo.martanian.com/html/loriette/florists/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:49:30 GMT -->
</html>