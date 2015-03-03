<!--
header
-->
<header data-menu-autostart="true">

    <!--
    header content
    -->
    <div class="header-content">
    
        <div class="center">
        
            <!--
            logo
            -->
            <div class="left">

                <div class="padding">
                <a href="{{URL::route('home')}}"><img src="_img/logo.png" alt="" /></a>
                <div class="header-slogan">
                
                <!--Find store-->
                <form action="{{URL::route('find-store')}}" method="POST">

                    <div>                                                        
                        <select class="select-menu" name="pre">
                            <option value="">Select a city...</option>
                            <option value="Ho Chi Minh">Thành phố Hồ Chí Minh</option>
                            <option value="Ha Noi">Thủ đô Hà Nội</option>
                        </select>
                    </div>
                    
                    <div>
                        <select class="select-menu" name="post">
                            <option value="">Select a street...</option>
                            <option value="Tan Binh">Phường Tân Bình</option>
                            <option value="Cau Giay">Cầu Giấy</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="button button-green" style="margin: 15px 100px;">Find Store</button>
                    </div>

                </form>
                    
                </div>
                </div>             
            </div>
            
            <!--
            contact informations
            -->
            <div class="right">
            
                <div class="padding">

                    <h3>Do you have <span>any question?</span></h3>
                    
                    <p>Nunc ac venenatis velit. Integer tincidunt, turpis id bibendum convallis, dui arcu laoreet lectus, a tincidunt nulla lacus et lacus. Pellentesque dignissim urna consec tetur adipiscing elit aenean dapibus.</p>
                    <p class="action"><a href="{{URL::route('home')}}#contact" class="button button-green">Feel free to contact us!</a> <span>or call us: <strong>+156 98 541 565</strong></span></p>

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
        
            <li class="active"><a href="{{URL::route('home')}}#home">Home <i class="fa fa-caret-down"></i></a></a>
                <ul class="sub-menu animated speed fadeInUp">
                    
                    <li><a href="{{URL::route('home')}}#opening-hours">Opening hours</a></li>
                    <li><a href="{{URL::route('home')}}#our-bouquets">Our bouquets</a></li>
                    <li><a href="{{URL::route('home')}}#pricing">Pricing</a></li>
                    <li><a href="{{URL::route('home')}}#references">References</a></li>

                </ul>
            </li>
            <li><a href="{{URL::route('home')}}">Blog</a></li>
            <li>
            
                <a href="{{URL::route('shop')}}">Shop <i class="fa fa-caret-down"></i></a>
            
                <!--
                dropdown menu
                -->
                <ul class="sub-menu animated speed fadeInUp">
                
                    <li><a href="{{URL::route('shop-product')}}">Single product</a></li>
                    <li><a href="{{URL::route('shop-cart')}}">Cart</a></li>
                    <li><a href="{{URL::route('shop-checkout')}}">Checkout</a></li>
                
                </ul>
            
            </li>
            <li><a href="{{URL::route('home')}}#about-us">About us</a></li>
            <li><a href="{{URL::route('home')}}#contact">Contact</a></li>
            <li>
            
                <i class="fa fa-search"></i>
                
                <!--
                search form
                -->
                <form action="findproduct" method="get" class="search-form animated speed fadeInLeft">
                
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
                
                    <li class="active"><a href="{{URL::route('home')}}#home">Home <i class="fa fa-caret-down"></i></a></a>
                        <ul class="sub-menu animated speed fadeInUp">
                        
                            <li><a href="{{URL::route('home')}}#opening-hours">Opening hours</a></li>
                            <li><a href="{{URL::route('home')}}#our-bouquets">Our bouquets</a></li>
                            <li><a href="{{URL::route('home')}}#pricing">Pricing</a></li>
                            <li><a href="{{URL::route('home')}}#references">References</a></li>

                        
                        </ul>
                    </li>
                    <li><a href="{{URL::route('home')}}">Blog</a></li>
                    <li>
                    
                        <a href="shop.html"><i class="fa fa-caret-left"></i> Shop</a>
                    
                        <!--
                        dropdown menu
                        -->
                        <ul class="sub-menu animated speed fadeInUp">
                        
                            <li><a href="{{URL::route('shop-product')}}">Single product</a></li>
                            <li><a href="{{URL::route('shop-cart')}}">Cart</a></li>
                            <li><a href="{{URL::route('shop-checkout')}}">Checkout</a></li>
                        
                        </ul>
                    
                    </li>
                    <li><a href="{{URL::route('home')}}#about-us">About us</a></li>
                    <li><a href="{{URL::route('home')}}#contact">Contact</a></li>
                
                </ul>
            
            </li>
            
            <li>
            
                <i class="fa fa-search"></i>
                
                <!--
                search form
                -->
                <form action="findproduct" method="get" class="search-form animated speed fadeInLeft">
                
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