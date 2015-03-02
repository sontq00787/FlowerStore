<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:49:54 GMT -->
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
        <div class="small-image-header" style="background-image: url( '_assets/_img/florist-working-in-a-store.jpg' ); background-position: 50% 66%;">

            <div class="small-image-header-content">
            
                <h1>News from <span>our florist</span></h1>
                
                <!--
                breadcrumbs
                -->
                <div class="breadcrumbs">
                
                    <a href="index-2.html">Home</a>
                    <span class="divider">/</span>
                    Blog
                
                </div>
            
            </div>
        
        </div> 
        
        <div class="center">

            <!--
            blog
            -->
            <section class="blog">
            
                <!--
                blog content
                -->
                <div class="blog-content">

                    <div class="blog-content-list">
                    
                        <div class="padding">
                        
                            <!--
                            single blog post on posts list
                            -->
                            <article class="blog-content-list-single-post">
                        
                                <div class="blog-content-list-single-post-image" style="background-image: url( '_assets/_img/florist-with-tulips.jpg' );">
                                
                                    <div class="blog-content-list-single-post-author-image">
                                    
                                        <img src="_assets/_img/person-2.jpg" alt="" />
                                    
                                    </div>
                                
                                </div>
                                
                                <h2><a href="blog-single.html">Newest promotion - all bouquets 15% off!</a></h2>
                                
                                <div class="blog-content-list-single-post-data">

                                    <i class="fa fa-calendar"></i> 2 days ago
                                    <span class="divider">&middot;</span>
                                    <i class="fa fa-user"></i> <a href="#">Martanian</a>
                                    <span class="divider">&middot;</span>
                                    <a href="#">Roses</a>, <a href="#">Bouquets</a>, <a href="#">Shop</a>
                                
                                </div>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dapibus rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                                <p><a href="blog-single.html" class="button button-green">Read full article...</a></p>

                            </article>
                            
                            <!--
                            single blog post on posts list
                            -->
                            <article class="blog-content-list-single-post">
                        
                                <div class="blog-content-list-single-post-image" style="background-image: url( '_assets/_img/florist-hands-showing-red-roses-bouquet-flowers.jpg' );">
                                
                                    <div class="blog-content-list-single-post-author-image">
                                    
                                        <img src="_assets/_img/person-1.jpg" alt="" />
                                    
                                    </div>
                                
                                </div>
                                
                                <h2><a href="blog-single.html">How to keep the roses fresh?</a></h2>
                                
                                <div class="blog-content-list-single-post-data">

                                    <i class="fa fa-calendar"></i> 2 days ago
                                    <span class="divider">&middot;</span>
                                    <i class="fa fa-user"></i> <a href="#">Martanian</a>
                                    <span class="divider">&middot;</span>
                                    <a href="#">Roses</a>, <a href="#">Bouquets</a>, <a href="#">Shop</a>
                                
                                </div>
                                
                                <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dapibus rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                <p><a href="blog-single.html" class="button button-green">Read full article...</a></p>

                            </article>
                            
                            <!--
                            single blog post on posts list
                            -->
                            <article class="blog-content-list-single-post">
                        
                                <div class="blog-content-list-single-post-image" style="background-image: url( '_assets/_img/flower.jpg' );">
                                
                                    <div class="blog-content-list-single-post-author-image">
                                    
                                        <img src="_assets/_img/person-2.jpg" alt="" />
                                    
                                    </div>
                                
                                </div>
                                
                                <h2><a href="blog-single.html">Best home decoration inspirations</a></h2>
                                
                                <div class="blog-content-list-single-post-data">

                                    <i class="fa fa-calendar"></i> 2 days ago
                                    <span class="divider">&middot;</span>
                                    <i class="fa fa-user"></i> <a href="#">Martanian</a>
                                    <span class="divider">&middot;</span>
                                    <a href="#">Roses</a>, <a href="#">Bouquets</a>, <a href="#">Shop</a>
                                
                                </div>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dapibus rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                                <p><a href="blog-single.html" class="button button-green">Read full article...</a></p>

                            </article>
                            
                            <!--
                            other posts
                            -->
                            <div class="other-posts">
                            
                                <p class="left"><a href="#">&laquo; Newer posts</a></p>
                                <p class="right"><a href="#">Older posts &raquo;</a></p>
                                
                                <div class="clear">
                                </div>
                            
                            </div>
                        
                        </div>
                    
                    </div>
                
                </div>
                
                <!--
                blog sidebar
                -->
                <div class="blog-sidebar">

                    <!--
                    single widget - most commented news
                    -->
                    <div class="widget">

                        <div class="padding">

                            <div class="h3-line">
                        
                                <h3>Most commented <span>news</span></h3>
                                
                            </div>

                            <!--
                            most commented news list
                            -->
                            <ul class="most-commented-news">
                            
                                <li>
                                
                                    <a href="blog-single.html">Cras vel sagittis nisl suspendisse</a>
                                    <div class="data">1 day ago &middot; 15 comments</div>
                                    <div class="line"></div>
                                
                                </li>
                                
                                <li>
                                
                                    <a href="blog-single.html">Maecenas malesuada, nisl fringilla vehicula</a>
                                    <div class="data">3 days ago &middot; 11 comments</div>
                                    <div class="line"></div>
                                
                                </li>
                                
                                <li>
                                
                                    <a href="blog-single.html">Nunc dignissim iaculis lorem non condimentum</a>
                                    <div class="data">1 month ago &middot; 9 comments</div>
                                    <div class="line"></div>
                                
                                </li>
                                
                                <li>
                                
                                    <a href="blog-single.html">Maecenas turpis tortor, molestie at mi non</a>
                                    <div class="data">3 months ago &middot; 5 comments</div>
                                
                                </li>
                            
                            </ul>
                        
                        </div>
                    
                    </div>
                    
                    <!--
                    single widget - popular tags
                    -->
                    <div class="widget">

                        <div class="padding">
                        
                            <div class="h3-line">
                        
                                <h3>Popular <span>tags</span></h3>
                                
                            </div>

                            <!--
                            tags cloud
                            -->
                            <div class="tags-cloud">
                                
                                <a href="blog.html" class="tag">Flowers</a>
                                <a href="blog.html" class="tag">Roses</a>
                                <a href="blog.html" class="tag">Florist</a>
                                <a href="blog.html" class="tag">Bouquets</a>
                                <a href="blog.html" class="tag">Fresh</a>
                                <a href="blog.html" class="tag">Shop</a>

                            </div>
                        
                        </div>
                
                    </div>
                    
                    <!--
                    single widget - archives
                    -->
                    <div class="widget">

                        <div class="padding">
                            
                            <div class="h3-line">
                        
                                <h3><span>Archive</span></h3>
                                
                            </div>
                            
                            <ul>
                            
                                <li><a href="blog.html">April 2014</a></li>
                                <li><a href="blog.html">March 2014</a></li>
                                <li><a href="blog.html">February 2014</a></li>
                                <li><a href="blog.html">January 2014</a></li>
                                <li><a href="blog.html">December 2013</a></li>
                                <li><a href="blog.html">October 2013</a></li>
                            
                            </ul>
                            
                        </div>
                
                    </div>
                    
                    <!--
                    single widget - text
                    -->
                    <div class="widget widget-text">
                    
                        <div class="padding">
                        
                            <div class="h3-line">
                        
                                <h3>Keep flowers <span>fresh</span></h3>
                                
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean massa lacus, mattis at ligula quis, sodales facilisis ipsum. Sed pretium, nibh nec gravida tincidunt</p>
                            <p>Justo enim cursus ligula, et tristique dui justo at ligula. Nullam aliquet blandit volutpat. Proin lobortis est non mauris lobortis, non mattis felis congue.</p>
                    
                        </div>
                    
                    </div>
                    
                    <!--
                    single widget - shop products
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

<!-- Mirrored from demo.martanian.com/html/loriette/florists/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:13 GMT -->
</html>