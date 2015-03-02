<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:51:35 GMT -->
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
        <div class="image-header" style="background-image: url( '_assets/_img/florist-with-tulips.jpg' );">
        
            <div class="image-header-content">
            
                <h1>Newest promotion - <span>all bouquets 15% off!</span></h1>
                
                <!--
                breadcrumbs
                -->
                <div class="breadcrumbs">
                
                    <a href="index-2.html">Home</a>
                    <span class="divider">/</span>
                    <a href="blog.html">Blog</a>
                    <span class="divider">/</span>
                    Newest promotion - all bouquets 15% off!
                
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
                
                    <!--
                    blog show reply form button
                    -->
                    <button class="button button-green blog-show-reply-form">Reply to this post</button>
                    
                    <!--
                    blog single post
                    -->
                    <article class="blog-single-post">
                    
                        <div class="padding">

                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper faucibus lacus, vel pretium metus. Praesent suscipit malesuada pretium. Quisque ultrices feugiat nulla vel molestie. Mauris suscipit quis dui et pharetra. Quisque venenatis urna ut dapibus rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</strong></p>
                            
                            <h3>Header H3</h3>
                            <p>Duis condimentum at velit a tincidunt. Duis diam mauris, luctus a dolor quis, adipiscing placerat mi. Maecenas imperdiet massa et lorem accumsan dictum. Nunc sit amet vehicula justo, vehicula lacinia purus. Sed magna neque, interdum ut vulputate sed, cursus eu risus. Phasellus sagittis interdum magna, vel ultricies tellus porttitor ut. Vivamus malesuada varius quam quis mollis. Mauris sodales, mi ac bibendum varius, nibh ligula tempus velit, sed convallis lectus metus ac justo.</p>
                            
                            <h4>Header H4</h4>
                            <p>Nunc nisi felis, malesuada ac sagittis sed, tempus nec odio. Vivamus ullamcorper pretium ipsum, id molestie elit dapibus vitae. Vestibulum ut odio id sem ultrices convallis vel id diam. Aliquam erat volutpat. Aliquam mattis lacus id neque posuere, ac egestas mi volutpat. Maecenas augue ante, laoreet vitae elementum rhoncus, pharetra eget erat.</p>
                            <blockquote><p>Morbi vestibulum consectetur molestie. Aliquam vel laoreet lectus, nec gravida diam. Nunc cursus facilisis mauris nec vulputate. Morbi varius sapien eget pulvinar consectetur. Aenean a facilisis tortor. Praesent erat mauris, iaculis a posuere ut, venenatis sit amet augue. Pellentesque nulla lectus, egestas vel dolor eget, mattis dignissim ipsum. Sed ullamcorper laoreet augue nec dictum. Sed vel ligula vel sapien lobortis convallis.</p></blockquote>
                            
                            <h5>Header H5</h5>
                            <p>Nulla sapien massa, tempus in eros vel, viverra lacinia diam. Nam quis felis ac nunc iaculis suscipit. Nunc varius mi purus, volutpat sagittis lorem viverra vel. Curabitur blandit orci sit amet turpis tempor, ut consectetur dui porttitor. In hac habitasse platea dictumst. Praesent lorem justo, tincidunt a velit eu, dictum interdum arcu.</p>
                            
                            <ul>
                            
                                <li>Nunc sit amet vehicula justo</li>
                                <li>Duis diam mauris, luctus</li>
                                <li>Vivamus ullamcorper pretium ipsum
                                
                                    <ul>
                                    
                                        <li>Aenean semper faucibus lacus</li>
                                        <li>Duis condimentum at velit</li>
                                        
                                    </ul>
                                
                                </li>
                                <li>Maecenas augue ante</li>
                                
                            </ul>
                            
                            <p>Donec vitae tellus eu purus lacinia elementum. Morbi fermentum mattis magna. Vestibulum vel gravida sem. Morbi iaculis egestas turpis, a bibendum leo tristique ut. Nullam sed eros a est bibendum imperdiet et et elit. Morbi non est at velit blandit placerat fermentum sed leo.</p>
    
                        </div>
                        
                        <!--
                        blog post data
                        -->
                        <div class="blog-post-data">
                        
                            <div class="padding">

                                <i class="fa fa-calendar"></i> 2 days ago
                                <span class="divider">&middot;</span>
                                <i class="fa fa-user"></i> <a href="#">Martanian</a>
                                
                                <div class="blog-post-data-tags">
                                
                                    Tags: <a href="#">Flowers</a>, <a href="#">Roses</a>, <a href="#">Fresh</a>
                                
                                </div>
                                
                                <div class="clear">
                                </div>
                                                      
                            </div>
                        
                        </div>
                        
                    </article>
                    
                    <!--
                    blog comments
                    -->
                    <div class="comments">

                        <div class="padding">

                            <div class="comments-box">
                            
                                <!--
                                blog comments list
                                -->
                                <ol class="comments-list">
                                
                                    <li>
                        
                                        <div class="comment-author-avatar"><img alt="" src="_assets/_img/avatar.png" height="40" width="40"></div>
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
                            
                                        <div class="comment-author-avatar"><img alt="" src="_assets/_img/avatar.png" height="40" width="40"></div>
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
                                        
                                        <!--
                                        blog comments children comments list
                                        -->
                                        <ul class="children">
                                    
                                            <li class="bypostauthor">
                                    
                                                <div class="comment-author-avatar"><img alt="" src="_assets/_img/avatar.png" height="40" width="40"></div>
                                                <div class="comment-container">
                                                
                                                    <div class="comment-author-info">
                                                    
                                                        <div class="comment-author-name">
                                                        
                                                            <span class="name">Martanian</span><a class="comment-reply-link" href="#">Reply</a>                    
                                                        
                                                        </div>
                                    
                                                        <time datetime="2014-09-10T15:20:00+00:00">September 10, 2014 at 3:20 pm</time>
        
                                                    </div>
                                    
                                                    <div class="comment-content">
                                                    
                                                        <p>Vestibulum ut arcu neque. Suspendisse sollicitudin eleifend urna eget lacinia. Cras ac elit in quam facilisis faucibus. Etiam tempus egestas nisl ut aliquam. Aenean vitae placerat metus. Curabitur in massa tortor, et feugiat odio. Donec luctus ligula in lacus pulvinar tristique.</p>
                                                        
                                                    </div>
                                    
                                                </div>    
                                    
                                            </li>
                                            
                                        </ul>    
                            
                                    </li>
        
                                </ol>
                                
                                <!--
                                paginate comments links
                                -->
                                <div class="paginate-comments-links">
                                
                                    <p class="left"><a href="#">&laquo; Newer comments</a></p>
                                    <p class="right"><a href="#">Older comments &raquo;</a></p>
                                    
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
                            
                                <h2><i class="fa fa-comments-o"></i>Leave a reply</h2>
    
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
                                    <textarea placeholder="Comment..." name="comment"></textarea>
        
                                    <div class="send">
                                    
                                        <button name="send" type="button" class="button button-green">Post comment!</button>
                                        
                                        <div class="clear">
                                        </div>
                                    
                                    </div>
                            		
                                </form>  
                            
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

<!-- Mirrored from demo.martanian.com/html/loriette/florists/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:51:35 GMT -->
</html>