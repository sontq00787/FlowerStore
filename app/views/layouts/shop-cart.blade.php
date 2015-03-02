<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.martanian.com/html/loriette/florists/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:14 GMT -->
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
            
                <h1>Your <span>cart</span></h1>
                
                <!--
                breadcrumbs
                -->
                <div class="breadcrumbs">
                
                    <a href="index-2.html">Home</a>
                    <span class="divider">/</span>
                    <a href="shop.html">Shop</a>
                    <span class="divider">/</span>
                    Cart
                
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

                    <!--
                    shop cart - products list
                    -->
                    <div class="shop-cart">
                
                        <div class="padding">

                            <!--
                            alert box
                            -->
                            <div class="alert-box alert-yellow">
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        
                            </div>
                            
                            <!--
                            cart table
                            -->
                            <table class="cart-table">
                            		
                                <!--
                                cart table header
                                -->
                                <tr class="head">

                              			<td class="product-name" colspan="2">Product</td>
                              			<td class="product-price">Price</td>
                              			<td class="product-quantity">Quantity</td>
                              			<td class="product-subtotal">Total</td>
                                    <td class="product-remove">&nbsp;</td>
                            		
                                </tr>
                                
                                @yield('shop-cart')
    
                                <!--
                                actions for shop cart
                                -->
                                <tr>
                                
                    			          <td colspan="6" class="actions">
                    
                      							    <!--
                                        coupon form
                                        -->
                                        <form class="coupon" method="post">
    
                                            <span class="about-coupon">Do you have a coupon code?</span>
                                            
                                            <input type="text" name="coupon-code" placeholder="Coupon code..." />
                                            <input type="submit" class="button button-gray" name="apply-coupon" value="Apply coupon" />
                                        
                                        </form>
                      				
                                        <!--
                                        action buttons
                                        -->
                      				    <a href="{{URL::route('shop')}}" class="button button-gray">Update Cart</a>
                                        <a href="{{URL::route('shop-checkout')}}" class="button button-green">Proceed to Checkout</a>
                                  
                                    </td>
                                
                                </tr>
    
                            </table>
                        
                        </div>
                    
                    </div>
                   
                    <!--
                    shop cart totals
                    -->
                    <div class="shop-cart-totals">
                    
                        <div class="padding">

                            <!--
                            totals table
                            -->
                            <table>
    
                                <!--
                                subtotal
                                -->
    		                        <tr class="cart-subtotal">
                                
    			                          <td>Cart Subtotal</td>
                                          @yield('shop-cart-total')
                                    
    		                        </tr>
                                
                                <!--
                                shipping
                                -->
                                <tr class="shipping">
    
                                    <td>Shipping and Handling</td>
                                    
                                    <!--
                                    calculate shipping button
                                    -->
                                    <td><span class="calculate-shipping-button">Calculate shipping</span></td>
                                
                                </tr>
                                
                                <!--
                                order total value
                                -->
                                <tr class="order-total">
                                
                                    <td>Order Total</td>
    			                    @yield('shop-cart-total')
                                    
                                </tr>
                            
                            </table>

                        </div>
                        
                        <!--
                        calculate shipping (hidden)
                        -->
                        <div class="calculate-shipping" style="display: none;">
                        
                            <div class="padding">

                                <form method="post">
                                
                                    <!--
                                    select: country
                                    -->
                                    <span class="custom-dropdown">
                                    
                                        <select class="custom-dropdown-select">
                                        
                                            <option value="">Select a country...</option>
        				                            <option value="AX">Åland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="PW">Belau</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">CuraÇao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="CI">Ivory Coast</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao S.A.R., China</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="IE">Republic of Ireland</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="SX">Saint Martin (Dutch part)</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB" selected="selected">United Kingdom (UK)</option>
                                            <option value="US">United States (US)</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        
                                        </select>
                                    
                                    </span>
    
                                    <!--
                                    shipping details fields
                                    -->
                                    <input type="text" name="state" placeholder="State / country" />
                                    <input type="text" name="postcode" placeholder="Postcode / Zip" />
                                    
                                    <!--
                                    update totals button
                                    -->
                                    <button type="button" class="button button-green">Update totals</button>
                                
                                </form>
                            
                            </div>
                        
                        </div>
                    
                    </div>

                    <!--
                    shop products list - additional products
                    -->
                    <div class="shop-products-list shop-products-small-list">

                        <!--
                        shop important facts
                        -->
                        <div class="shop-important-facts shop-important-facts-border">
         
                            <div class="padding">
                            
                                <h3>See our other products:</h3>
                                <ul>
                                
                                    <li><a href="shop.html">Bouquets</a></li>
                                    <li><a href="shop.html">Home decorations</a></li>
                                    <li><a href="shop.html">Single flowers</a></li>
                                    <li><a href="shop.html">Promotions</a></li>
                                
                                </ul>
                            
                            </div>
                        
                        </div>
                        
                        <!--
                        shop single product
                        -->
                        <div class="shop-single-product">
        
                            <div class="padding">
                            
                                <!--
                                shop single product image
                                -->
                                <div class="shop-single-product-image" style="background-image: url( '_img/florist-hands-showing-red-roses-bouquet-flowers.jpg' );">
                                </div>
                            
                                <h3>
                                
                                    <a href="shop-product.html">Roses bouquet</a>
                                   
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
                                
                                <p>Perfect as a gift for girlfriend.</p>
                                <p class="actions"><span class="price">$9.00</span> <a href="shop-cart.html" class="add-to-cart">Add to cart</a></p>
                                                
                            </div>
                        
                        </div>
                        
                        <!--
                        shop single product
                        -->
                        <div class="shop-single-product shop-single-product-last">
        
                            <div class="padding">
                            
                                <!--
                                shop single product image
                                -->
                                <div class="shop-single-product-image" style="background-image: url( '_img/lemon-trees-in-pots.jpg' );">
                                </div>
                                
                                <h3>
                                
                                    <a href="shop-product.html">Lemon trees</a>
                                    
                                    <!--
                                    shop product stars
                                    -->
                                    <span class="stars">
                                    
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    
                                    </span>
                                
                                </h3>
                                
                                <p>Your own lemons at home.</p>
                                <p class="actions"><span class="price">$15.00</span> <a href="shop-cart.html" class="add-to-cart">Add to cart</a></p>
                                                
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
                            
                            <!--
                            cart products
                            -->
                            @yield('cart-products')
                            
                            <!--
                            subtotal
                            -->
                            @yield('cart-subtotals')
                            
                            <!--
                            action links
                            -->
                            <p><a href="shop-cart.html">View cart</a> &middot; <a href="shop-checkout.html">Checkout</a></p>
                        
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

<!-- Mirrored from demo.martanian.com/html/loriette/florists/shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Feb 2015 09:50:14 GMT -->
</html>