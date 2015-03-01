$( document ).ready( function() {

   /**
    *
    * strict mode
    * 
    */                
    
    'use strict';

   /**
    *
    * header global variables
    * 
    */                
    
    var currentHeaderImageID = 1;
    var headerImagesCount = 0;
    var headerSlider;
    var windowWidth = 0;
    var windowHeight = 0;
    var menuVisible = false;     
   
   /**
    *
    * header menu autostart value
    * 
    */
    
    var menuAutostart = $( 'header' ).data( 'menu-autostart' );
   
   /**
    *
    * onload functions
    * 
    */
    
    $( window ).load( function() {

       /**
        *
        * window width and height
        *
        */            
        
        windowWidth = $( window ).width();
        windowHeight = $( window ).height(); 

       /**
        *
        * hide header       
        *
        */           

        $( 'header' ).css({ 'top': - $( 'header' ).height() + 5 }); 
       
       /**
        *
        * open menu
        * 
        */                                
        
        $.martanianAutoMenu( 300 );
      
       /**
        *
        * set header big image height
        * 
        */
        
        $.martanianSetHeaderBigImageHeight();                                
        
       /**
        *
        * set image height in box with images
        * 
        */
        
        $.martanianSetupBoxTextWithImage( false ); 
      
       /**
        *
        * setup pricing options
        * 
        */

        $.martanianSetUpPricing( false );

       /**
        *
        * setup opening hours for today
        * 
        */
        
        $.martanianSetUpOpeningHours();                               
       
       /**
        *
        * setup promotions
        * 
        */
        
        $.martanianSetUpPromotion( false );                               
       
       /**
        *
        * setup references
        * 
        */
        
        $.martanianSetUpReferences();                               
       
       /**
        *
        * load product description tabs
        *
        */
        
        $.martanianLoadProductDescriptionTabs();                               
       
       /**
        *
        * hide other images in shop product page
        *
        */
        
        $.martanianHideOtherImagesInShopProductPage();                               

       /**
        *
        * setup first image in gallery popup
        *
        */                               
        
        $.martanianSetUpFirstGalleryImage();

       /**
        *
        * scroll
        * 
        */
        
        $.martanianScrollOnLoad();
       
       /**
        *
        * appointment datetime settings
        * 
        */                             
        
        $.martanianAppointmentDateTime();   
       
       /**
        *
        * load google map
        * 
        */
        
        var element = $( '#google-map' );                                                 
        if( typeof element[0] != 'undefined' && element[0] != '' ) {
        
            $.martanianGoogleMapInit();
        }
        
       /**
        *
        * initialize header images slider
        * 
        */
        
        var element = $( '#content .big-image-header' );                                            
        if( typeof element[0] != 'undefined' && element[0] != '' ) { 

            $( '#content .big-image-header .big-image-single' ).each( function() {

                headerImagesCount++;
                
                $( this ).attr( 'data-image-id', headerImagesCount );
                if( headerImagesCount != 1 ) $( this ).hide();
            
            });

            $.martanianHeaderImagesSlider();
        }                               

       /**
        *
        * hide loader
        *
        */

        setTimeout( function() {
            
            $( '#loader' ).fadeOut( 300 );
            setTimeout( function() {
            
                $( '#loader' ).remove();
            
            }, 500 );
        
        }, 500 );                                                                                              

       /**
        *
        * end
        * 
        */                                
        
    }); 
    
   /**
    *
    * window resize functions
    * 
    */
    
    $( window ).resize( function() {
    
       /**
        *
        * window width and height
        *
        */            
        
        windowWidth = $( window ).width();
        windowHeight = $( window ).height();
       
       /**
        *
        * hide header       
        *
        */           

        $( 'header' ).css({ 'top': - $( 'header' ).height() + 5 });
        
        if( windowWidth >= 933 ) $( '#content' ).animate({ 'opacity': '1' }, 300 );
        else $( '#content' ).css({ 'opacity': '1' });
        
        $( 'header ul.menu.menu-responsive ul.sub-menu' ).hide();
        $( 'header ul.menu.menu-responsive li' ).removeClass( 'with-active-sub-menu' );
        
        menuVisible = false;                            
      
       /**
        *
        * set header big image height
        * 
        */
        
        $.martanianSetHeaderBigImageHeight(); 
        
       /**
        *
        * header slider
        *              
        */
        
        $.martanianHeaderImagesSlider();                                                 
        
       /**
        *
        * set image height in box with images
        * 
        */
        
        $.martanianSetupBoxTextWithImage( true ); 
      
       /**
        *
        * setup pricing options
        * 
        */

        $.martanianSetUpPricing( true ); 
        
       /**
        *
        * setup promotions
        * 
        */
        
        $.martanianSetUpPromotion( true );

       /**
        * 
        * end
        * 
        */                                  
    
    });                         
   
   /**
    *
    * show menu on top
    *
    */               

    $.martanianAutoMenu = function( timeout ) {

        if( windowWidth >= 933 ) {
        
            setTimeout( function() {
    
                var position = $( window ).scrollTop();
                if( menuVisible == false && position == 0 && menuAutostart == true ) {
        
                    $( 'header' ).animate({ 'top': '0' }, 300 );
                    $( '#content' ).animate({ 'opacity': '0.9' }, 300 );
                    
                    menuVisible = true;
                }
                
                else {
        
                    if( menuVisible == true && position != 0 ) {
                    
                        var headerTopPosition = $( 'header' ).height() - 5;
                        
                        $( 'header' ).animate({ 'top': - headerTopPosition }, 300 );
                        $( '#content' ).animate({ 'opacity': '1' }, 300 );
                        
                        $.martanianHideSearchForm( '' );
                        menuVisible = false;
                    }
                }
                
            }, timeout );
        }
    
    };

    $( window ).scroll( function() { $.martanianAutoMenu( 0 ); });
                                              
   /**
    *
    * show menu on click
    * 
    */

    $( '#menu-button' ).click( function() {
    
        if( menuVisible == false ) {
        
            if( windowWidth >= 933 ) {
            
                $( 'header' ).animate({ 'top': '0' }, 300 );
                $( '#content' ).animate({ 'opacity': '0.9' }, 300 );
            }
            
            else {
            
                $( 'header' ).css({ 'top': '0' });
            }
            
            menuVisible = true;
        }
        
        else {
        
            var headerTopPosition = $( 'header' ).height() - 5;
            
            if( windowWidth >= 933 ) {
            
                $( 'header' ).animate({ 'top': - headerTopPosition }, 300 ); 
                $( '#content' ).animate({ 'opacity': '1' }, 300 );
            }
            
            else {
            
                $( 'header' ).css({ 'top': - headerTopPosition }); 
                $( 'header ul.menu.menu-responsive ul.sub-menu' ).hide();
            }
            
            $.martanianHideSearchForm( '' );
            menuVisible = false;
        }
    
    });    
    
   /**
    *
    * show menu list (responsive) on click
    * 
    */
    
    $( 'header .menu.menu-responsive li' ).click( function() {
    
        if( windowWidth < 932 ) {
        
            var element = $( this );
            var submenu = element.children( 'ul.sub-menu' );
            
            if( typeof submenu[0] != 'undefined' && submenu[0] !== false ) {
            
                if( submenu.css( 'display' ) == 'none' ) {
                
                    submenu.show();
                    setTimeout( function() {
                    
                        element.addClass( 'with-active-sub-menu' );
                    
                    }, 400 );
                }
                
                else {
                
                    submenu.hide();
                    element.removeClass( 'with-active-sub-menu' );
                }
            }
        }
    
    });                                         
   
   /**
    *
    * show / hide search form
    * 
    */                   
    
    var searchFormVisible = false;
    $.martanianHideSearchForm = function( parent ) {

        if( parent == '' ) {

            $( 'header .header-menu .menu-'+ ( windowWidth >= 1333 ? 'standard' : 'responsive' ) +' li' ).each( function() {
            
                var element = $( this ).children( '.search-form' );
                if( typeof element[0] != 'undefined' && element[0] != '' ) {
                
                    parent = $( this );
                }
                
                element = false;
                
            });
        }

        if( parent == '' ) return;

        parent.children( '.search-form' ).removeClass( 'fadeInLeft' ).addClass( 'fadeOutLeft' );
        parent.removeClass( 'active' );
        
        setTimeout( function() {
        
            parent.children( '.search-form' ).hide().removeClass( 'fadeOutLeft' ).addClass( 'fadeInLeft' );
        
        }, 300 );
        
        searchFormVisible = false;
        
    };

    $( 'header .header-menu .menu li i' ).click( function() {
    
        var parent = $( this ).parent();
        var element = parent.children( '.search-form' );
        
        if( typeof element[0] != 'undefined' && element[0] != '' ) {
        
            if( searchFormVisible == false ) {
            
                $( element[0] ).fadeIn( 300 );

                parent.addClass( 'active' );
                searchFormVisible = true;
            }
            
            else {
            
                $.martanianHideSearchForm( parent );
            }
        }
    
    });
   
   /**
    *
    * set up height of big image header
    * 
    */
    
    $.martanianSetHeaderBigImageHeight = function() {

        $( '#content .big-image-header' ).css({ 'height': windowHeight * 0.85 });
    
    }; 
    
   /**
    *
    * set up header images rotate
    * 
    */
    
    $.martanianHeaderImagesSlider = function() {

        clearInterval( headerSlider );
        if( headerImagesCount > 1 && windowWidth >= 933 ) {
        
            headerSlider = setInterval( function() {
            
                $( '#content .big-image-header .big-image-single[data-image-id="'+ currentHeaderImageID +'"]' ).fadeOut( 300 );
                
                currentHeaderImageID = currentHeaderImageID + 1 > headerImagesCount ? 1 : currentHeaderImageID + 1;
                $( '#content .big-image-header .big-image-single[data-image-id="'+ currentHeaderImageID +'"]' ).fadeIn( 300 );
            
            }, 5000 );
        }
    }                             
   
   /**
    *
    * google map
    * 
    */

    $.martanianGoogleMapInit = function() {

        var lat = 1.2820694; 
        var lng = 103.8488486;

        var map_center = new google.maps.LatLng( lat, lng );

        var mapOptions = {
        
            zoom: 16,
            center: map_center,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        }
      
        var map = new google.maps.Map( document.getElementById( 'google-map' ), mapOptions );

        var beachMarker = new google.maps.Marker({
            
            position: new google.maps.LatLng( lat, lng ),
            map: map,
        });
    };
   
   /**
    *
    * four-boxes links
    * 
    */
    
    $( '.four-boxes .four-boxes-element' ).click( function() {
    
        var hash = '#'+ $( this ).data( 'go-to' );
        if( hash != '' && typeof hash != 'undefined' ) {
        
            var sectionPos = $.martanianGetSectionPosition( hash );
            
            window.location.hash = hash;
            $( 'html, body' ).animate({ scrollTop: sectionPos }, 1500 );
        }
    
    });               
   
   /**
    *
    * box text with image height 
    * 
    */
    
    $.martanianSetupBoxTextWithImage = function( resized ) {

        $( '.box-text-with-image-right' ).each( function() {
       
            var box = $( this ).children( '.contents' );
            var childrenID = 1;
            
            box.children( '.single-content' ).each( function() {
            
                var children = $( this );   
                
                // reset heights
                children.css({ 'height': '' });
                children.children( '.left' ).css({ 'height': '' });
                
                children.children( '.left' ).css({ 'height': children.height() });
                
                if( resized == false ) {
                
                    if( childrenID > 1 ) children.hide();
                    else {
    
                        children.addClass( 'single-content-active' );
                        box.css({ 'height': children.height() });
                    }
                    
                    children.attr( 'data-content-id', childrenID );
                }
                
                else {
                
                    if( children.hasClass( 'single-content-active' ) ) {
                    
                        box.css({ 'height': children.height() });
                    }
                }
                
                childrenID++;
            
            });

        });
        
        $( '.box-text-with-image-left' ).each( function() {
       
            var box = $( this ).children( '.contents' );
            var childrenID = 1;
            
            box.children( '.single-content' ).each( function() {
            
                var children = $( this );    
                
                // reset heights
                children.css({ 'height': '' });
                children.children( '.right' ).css({ 'height': '' });
                
                children.children( '.right' ).css({ 'height': children.height() });
                
                if( resized == false ) {
                
                    if( childrenID > 1 ) children.hide();
                    else {
    
                        children.addClass( 'single-content-active' );
                        box.css({ 'height': children.height() });
                    }
                    
                    children.attr( 'data-content-id', childrenID );
                }
                
                else {
                
                    if( children.hasClass( 'single-content-active' ) ) {
                    
                        box.css({ 'height': children.height() });
                    }
                }
                
                childrenID++;
            
            });

        });

    };  
    
   /**
    *
    * next single box content
    *
    */            
    
    $( '.box-text-with-image-right .next-element, .box-text-with-image-left .next-element' ).click( function() {
    
        var contentsBox = $( this ).parent().children( '.contents' );  
        var activeElement = contentsBox.children( '.single-content-active' );
        var activeElementID = parseInt( activeElement.data( 'content-id' ) );
        var nextElementID = activeElementID + 1;
        var nextElement = contentsBox.children( '.single-content[data-content-id="'+ nextElementID +'"]' );

        if( typeof nextElement[0] == 'undefined' || nextElement[0] == '' ) {
               
            nextElementID = 1;
            nextElement = contentsBox.children( '.single-content[data-content-id="'+ nextElementID +'"]' );
        }

        contentsBox.animate({ 'height': nextElement.height() }, 300 );
        nextElement.fadeIn( 300 ).addClass( 'single-content-active' );
        activeElement.fadeOut( 300 ).removeClass( 'single-content-active' );
    
    });
    
   /**
    *
    * previous single box content
    *
    */            
    
    $( '.box-text-with-image-right .prev-element, .box-text-with-image-left .prev-element' ).click( function() {
    
        var contentsBox = $( this ).parent().children( '.contents' );
        var activeElement = contentsBox.children( '.single-content-active' );
        var activeElementID = parseInt( activeElement.data( 'content-id' ) );
        var prevElementID = activeElementID - 1;
        var prevElement = contentsBox.children( '.single-content[data-content-id="'+ prevElementID +'"]' );

        if( typeof prevElement[0] == 'undefined' || prevElement[0] == '' ) {
               
            var maxElementID = 0;
            contentsBox.children( '.single-content' ).each( function() {

                if( parseInt( $( this ).data( 'content-id' ) ) > maxElementID ) maxElementID = parseInt( $( this ).data( 'content-id' ) );
            
            });

            prevElementID = maxElementID;
            prevElement = contentsBox.children( '.single-content[data-content-id="'+ prevElementID +'"]' );
        }

        contentsBox.animate({ 'height': prevElement.height() }, 300 );
        prevElement.fadeIn( 300 ).addClass( 'single-content-active' );
        activeElement.fadeOut( 300 ).removeClass( 'single-content-active' );
    
    });     
    
   /**
    *
    * setup pricing
    * 
    */
    
    $.martanianSetUpPricing = function( responsive ) {
    
        var pricings_count = 0;
        $( '.pricing .right .single-pricing' ).each( function() {
        
            if( responsive == false ) {
            
                if( pricings_count > 0 ) $( this ).hide();
                else {
    
                    $( this ).addClass( 'single-pricing-active' );
                }
            }
            
            if( $( this ).hasClass( 'single-pricing-active' ) ) {

                $( '.pricing' ).css({ 'height': windowWidth > 932 ? $( this ).height() : $( this ).height() + $( '.pricing .left' ).height() });
            }
            
            pricings_count++;
        
        });
    
    }; 
    
   /**
    *
    * change pricing element
    * 
    */
    
    $( '.pricing .left select' ).change( function() {
            
        var value = $( this ).val();

        $( '.pricing .right .single-pricing[data-pricing-name="'+ value +'"]' ).fadeIn( 300 );
        $( '.pricing .right .single-pricing.single-pricing-active' ).fadeOut( 300 ).removeClass( 'single-pricing-active' );  
        $( '.pricing .right .single-pricing[data-pricing-name="'+ value +'"]' ).addClass( 'single-pricing-active' );
        
        var singlePricingHeight = $( '.pricing .right .single-pricing[data-pricing-name="'+ value +'"]' ).height();
        
        $( '.pricing' ).animate({ 'height': windowWidth > 949 ? singlePricingHeight : singlePricingHeight + $( '.pricing .left' ).height() }, 300 );
    
    });        

   /**
    *
    * setup opening hours
    * 
    */
    
    $.martanianSetUpOpeningHours = function() {
    
        var today = $( '.opening-hours .other-days li.active' ).data( 'day-name' );
        if( typeof today != 'undefined' && today != '' ) {
        
            $( '.opening-hours .day-info .day-info-single[data-day-name="'+ today +'"]' ).show();
        }
    
    };   
    
   /**
    *
    * change day in opening hours box
    * 
    */
    
    $( '.opening-hours .other-days li' ).click( function() {
    
        var element = $( this );
        if( !element.hasClass( 'active' ) ) {
        
            var newDayName = element.data( 'day-name' ); 
            var activeElement = $( '.opening-hours .other-days li.active' );
            var activeElementName = activeElement.data( 'day-name' );
            
            if( typeof activeElement != 'undefined' && activeElement != '' ) {
            
                $( '.opening-hours .day-info .day-info-single[data-day-name="'+ activeElementName +'"]' ).fadeOut( 300 );
                $( '.opening-hours .day-info .day-info-single[data-day-name="'+ newDayName +'"]' ).fadeIn( 300 );
                
                activeElement.removeClass( 'active' );
                element.addClass( 'active' );
                
                setTimeout( function() {
                
                    $( '.opening-hours .day-info .day-info-single[data-day-name="'+ activeElementName +'"]' ).hide();
                
                }, 500 );
            }
        }
            
    });  
    
   /**
    *
    * setup promotions box
    * 
    */
    
    $.martanianSetUpPromotion = function( responsive ) {

        $( '.promotion' ).each( function() {

            var promotions = $( this ).children( '.promotions' );
            var childrenID = 1;
                                            
            promotions.children( '.single-promotion' ).each( function() {
            
                var children = $( this );
                if( responsive == false ) {
                
                    if( childrenID > 1 ) children.hide();
                    else {
                    
                        children.addClass( 'single-promotion-active' );
                        promotions.css({ 'height': children.height() });
                    }
                    
                    children.attr( 'data-promotion-id', childrenID );
                }
                
                else {
                
                    if( children.hasClass( 'single-promotion-active' ) ) {
                    
                        promotions.css({ 'height': children.height() });
                    }
                }
                
                childrenID++;
                
            });
        
        });

    };   
    
   /**
    *
    * next promotion
    * 
    */
    
    $( '.promotion .next-element' ).click( function() {
    
        var promotionBox = $( this ).parent().children( '.promotions' );
        var activeElement = promotionBox.children( '.single-promotion-active' );
        var activeElementID = parseInt( activeElement.data( 'promotion-id' ) );
        var nextElementID = activeElementID + 1;
        var nextElement = promotionBox.children( '.single-promotion[data-promotion-id="'+ nextElementID +'"]' );

        if( typeof nextElement[0] == 'undefined' || nextElement[0] == '' ) {
               
            nextElementID = 1;
            nextElement = promotionBox.children( '.single-promotion[data-promotion-id="'+ nextElementID +'"]' );
        }

        promotionBox.animate({ 'height': nextElement.height() }, 300 );
        nextElement.fadeIn( 300 ).addClass( 'single-promotion-active' );
        activeElement.fadeOut( 300 ).removeClass( 'single-promotion-active' );
    
    });     
    
   /**
    *
    * previous promotion
    * 
    */
    
    $( '.promotion .prev-element' ).click( function() {
    
        var promotionBox = $( this ).parent().children( '.promotions' );
        var activeElement = promotionBox.children( '.single-promotion-active' );
        var activeElementID = parseInt( activeElement.data( 'promotion-id' ) );
        var prevElementID = activeElementID - 1;
        var prevElement = promotionBox.children( '.single-promotion[data-promotion-id="'+ prevElementID +'"]' );

        if( typeof prevElement[0] == 'undefined' || prevElement[0] == '' ) {
               
            var maxElementID = 0;
            promotionBox.children( '.single-promotion' ).each( function() {

                if( parseInt( $( this ).data( 'promotion-id' ) ) > maxElementID ) maxElementID = parseInt( $( this ).data( 'promotion-id' ) );
            
            });

            prevElementID = maxElementID;
            prevElement = promotionBox.children( '.single-promotion[data-promotion-id="'+ prevElementID +'"]' );
        }

        promotionBox.animate({ 'height': prevElement.height() }, 300 );
        prevElement.fadeIn( 300 ).addClass( 'single-promotion-active' );
        activeElement.fadeOut( 300 ).removeClass( 'single-promotion-active' );
    
    });                                                                   
   
   /**
    *
    * setup references
    * 
    */
    
    $.martanianSetUpReferences = function() {

        $( '.references' ).each( function() {
        
            var references = $( this ).children( '.reference-content' );
            var referenceID = 1;
            var referencesCount = 0;
            
            references.children( '.single-reference' ).each( function() {
            
                var reference = $( this );
                
                if( referenceID > 1 ) reference.hide();
                else {

                    references.css({ 'height': reference.height() + ( windowWidth < 599 ? 90 : 150 ) });
                }
                
                reference.attr( 'data-reference-id', referenceID );
                referenceID++;
                referencesCount++;
            
            });
            
            if( referencesCount > 0 ) {
            
                var currentReference = 1;
                setInterval( function() {
            
                    references.children( '.single-reference[data-reference-id="'+ currentReference +'"]' ).fadeOut( 300 );
                    currentReference = currentReference + 1 > referencesCount ? 1 : currentReference + 1;
                    references.children( '.single-reference[data-reference-id="'+ currentReference +'"]' ).fadeIn( 300 );
                    
                    references.animate({ 'height': references.children( '.single-reference[data-reference-id="'+ currentReference +'"]' ).height() + ( windowWidth < 599 ? 90 : 150 ) }, 300 );
            
                }, 5000 );
            }

        });

    };              
    
   /**
    *
    * hide tabs in shop product description
    * 
    */
    
    $.martanianLoadProductDescriptionTabs = function() {
    
        var element = $( '.shop-product-tabs .shop-product-tabs-content' );
        if( typeof element[0] != 'undefined' && element[0] != '' ) {
        
            var childrenID = 1;
            element.children( '.shop-product-tabs-single-tab' ).each( function() {
            
                if( childrenID != 1 ) $( this ).hide();
                childrenID++;
            
            });
        }
            
    };               
   
   /**
    *
    * change tabs in shop product description
    * 
    */
    
    $( '.shop-product-tabs-switcher .button' ).click( function() {
    
        var element = $( this );
        var tabName = element.data( 'tab-name' );

        if( typeof tabName != 'undefined' && tabName != '' && !element.hasClass( 'active' ) ) {
        
            // hide visible tab
            var currentTabName = $( '.shop-product-tabs-switcher .button.active' ).data( 'tab-name' );
            var currentTab = $( '.shop-product-tabs-content .shop-product-tabs-single-tab[data-tab-name="'+ currentTabName +'"]' );
            currentTab.hide();
            
            // show new tab
            var newTab = $( '.shop-product-tabs-content .shop-product-tabs-single-tab[data-tab-name="'+ tabName +'"]' );       
            newTab.show();
            
            // change button classes
            var activeElementClasses = $( '.shop-product-tabs-switcher .button.active' ).attr( 'class' );
            var currentElementClasses = element.attr( 'class' );
            
            $( '.shop-product-tabs-switcher .button.active' ).removeClass( activeElementClasses ).addClass( 'button button-gray' );
            element.removeClass( currentElementClasses ).addClass( activeElementClasses );
        }
     
    });
    
   /**
    *
    * hide other images in shop single product page
    *
    */                                             
    
    var shopSingleProductImages = 0;
    $.martanianHideOtherImagesInShopProductPage = function() {
    
        var element = $( '.shop .shop-product .shop-product-images' );
        if( typeof element[0] != 'undefined' && element[0] != '' ) {
        
            var childrenID = 1;
            element.children( '.shop-product-single-image' ).each( function() {
            
                if( childrenID != 1 ) $( this ).hide();
                else $( this ).addClass( 'active' );
                
                $( this ).attr( 'data-image-id', childrenID );
                childrenID++;
            
            });
            
            shopSingleProductImages = childrenID == 0 ? 0 : childrenID - 1;
        }
            
    };    
    
   /**
    *
    * change images in shop single product page: previous image
    * 
    */
    
    $( '.shop .shop-product .shop-product-images .shop-product-images-switch .shop-product-images-prev' ).click( function() {
    
        var activeImageID = $( '.shop .shop-product .shop-product-images .shop-product-single-image.active' ).data( 'image-id' );
        var newImageID = activeImageID == 1 ? shopSingleProductImages : activeImageID - 1;
        
        $( '.shop .shop-product .shop-product-images .shop-product-single-image[data-image-id="'+ activeImageID +'"]' ).fadeOut( 300 ).removeClass( 'active' );
        $( '.shop .shop-product .shop-product-images .shop-product-single-image[data-image-id="'+ newImageID +'"]' ).fadeIn( 300 ).addClass( 'active' );
    
    });
    
   /**
    *
    * change images in shop single product page: next image
    * 
    */
    
    $( '.shop .shop-product .shop-product-images .shop-product-images-switch .shop-product-images-next' ).click( function() {
    
        var activeImageID = $( '.shop .shop-product .shop-product-images .shop-product-single-image.active' ).data( 'image-id' );
        var newImageID = activeImageID == shopSingleProductImages ? 1 : activeImageID + 1;
        
        $( '.shop .shop-product .shop-product-images .shop-product-single-image[data-image-id="'+ activeImageID +'"]' ).fadeOut( 300 ).removeClass( 'active' );
        $( '.shop .shop-product .shop-product-images .shop-product-single-image[data-image-id="'+ newImageID +'"]' ).fadeIn( 300 ).addClass( 'active' );
    
    });                    

   /**
    *
    * sending contact form
    * 
    */
    
    $( '#contact-form button[name="send-contact-form"]' ).click( function() {

        var values = {     
            'name': '',
            'email': '',
            'phone': '',
            'message': ''
        };
        
        var areErrors = false;
        $.each( values, function( key, value ) {
        
            var currentElement = $( '#contact-form *[name='+ key +']' );
            values[key] = currentElement.val();
            
            if( values[key] != '' && values[key] != false ) { currentElement.removeClass( 'error' ); }
            else {
            
                currentElement.addClass( 'error' );
                areErrors = true;
            }
        
        });
        
        if( areErrors == false ) {
        
            $.ajax({ url: '_assets/submit.php',
                     data: { 'send': 'contact-form', 'data': values },
                     type: 'post',
                     success: function( output ) {

                         $( '#contact-form .confirm' ).fadeIn( 300 );
                         
                   } });
        }
    
    });     
    
   /**
    *
    * show reply form for blog
    * 
    */
    
    $( '.blog .blog-show-reply-form' ).click( function() {
    
        $( '.comments .comments-reply' ).slideToggle();
        $( this ).fadeOut( 300 );
    
    }); 
    
   /**
    *
    * show reply form for shop
    * 
    */
    
    $( '.shop .shop-show-reply-form' ).click( function() {
    
        $( '.comments .comments-reply' ).slideToggle();
        $( this ).fadeOut( 300 );
    
    });                                                         
        
   /**
    *
    * show "calculate shipping" form
    * 
    */
                                                              
    $( '.shop .calculate-shipping-button' ).click( function() {
    
        $( '.shop .calculate-shipping' ).slideToggle();
    
    });                  
        
   /**
    *
    * show coupon code for shop cart
    * 
    */
    
    $( '.shop .shop-cart .cart-table td.actions .coupon span.about-coupon' ).click( function() {
    
        var element = $( '.shop .shop-cart .cart-table td.actions .coupon' );
        element.css({ 'min-height': element.height() });
        
        $( this ).fadeOut( 300 );
        setTimeout( function() {
        
            $( '.shop .shop-cart .cart-table td.actions .coupon input' ).fadeIn( 300 );
            element.css({ 'min-height': '' });
        
        }, 400 );
    
    });  
    
   /**
    *
    * change quantity value in shop - minus
    * 
    */
    
    $( '.shop .shop-cart .cart-table td.product-quantity .quantity-minus' ).click( function() {
    
        var quantityValueElement = $( this ).siblings( '.quantity-value' );
        var quantityValue = parseInt( quantityValueElement.html() );

        if( typeof quantityValue != 'undefined' ) {

            quantityValueElement.html( quantityValue - 1 <= 1 ? 1 : quantityValue - 1 );            
        }   
    
    });
    
   /**
    *
    * change quantity value in shop - plus
    * 
    */
    
    $( '.shop .shop-cart .cart-table td.product-quantity .quantity-plus' ).click( function() {

        var quantityValueElement = $( this ).siblings( '.quantity-value' );
        var quantityValue = parseInt( quantityValueElement.html() );

        if( typeof quantityValue != 'undefined' ) {

            quantityValueElement.html( quantityValue + 1 );            
        }    
            
    });
    
   /**
    *
    * show different address form
    * 
    */
    
    $( '.shop .shop-checkout input[name="different-address"]' ).change( function() {
    
        $( '.shop .shop-checkout .different-address' ).slideToggle();
    
    }); 
    
   /**
    *
    * show returning customer form
    * 
    */                
    
    $( '.shop .shop-checkout .returning-customer-link' ).click( function() {
    
        $( '.shop .shop-checkout .returning-customer' ).slideToggle();
    
    });  
    
   /**
    *
    * setup first image in gallery popup
    * 
    */
    
    $.martanianSetUpFirstGalleryImage = function() {
    
        var imageID = 1;
        $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).each( function() {
        
            if( imageID == 1 ) {
            
                var element = $( this );
                
                var imageUrl = element.children( '.gallery-thumbnail-image' ).css( 'background-image' );
                    imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
                    imageUrl = imageUrl.replace( /\"/g, '' );
                    
                var imageTitle = element.children( '.gallery-thumbnail-title' ).html();
    
                $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
                $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );
                
                element.addClass( 'active' );
            }
            
            imageID++;
        
        });
    
    };               
   
   /**
    *
    * open gallery popup
    * 
    */
    
    $.martanianOpenGalleryPopup = function() {
    
        $( '#gallery-popup .gallery-popup-background' ).fadeIn( 300 );
        setTimeout( function() {
        
            $( '#gallery-popup .gallery-popup-content' ).show();
            
           /**
            *
            * gallery thumbnails height
            * 
            */
            
            var leftSideHeight = $( '#gallery-popup .gallery-popup-content .left' ).height() - 60;
            var leftSideUpHeight = $( '#gallery-popup .gallery-popup-content .left .left-up' ).height() + 30;
            $( '#gallery-popup .gallery-popup-content .left .gallery-thumbnails' ).css({ 'height': leftSideHeight - leftSideUpHeight });  
        
        }, 400 );
    };
    
    
    $( '.gallery .gallery-all-elements' ).click( function() { $.martanianOpenGalleryPopup(); });
    
   /**
    *
    * change gallery thumbnails category
    *
    */                                  
    
    $( '#gallery-popup select[name="gallery-thumbnails-category"]' ).change( function() {
    
        var value = $( this ).val();
        var foundFirst = false;
        
        $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).each( function() {
        
            var category = $( this ).data( 'thumbnail-category' );
            $( this ).removeClass( 'active' );
            
            if( category != value && value != '*' ) $( this ).hide();
            else {
            
                $( this ).show();
                if( foundFirst == false ) {
                
                    var imageUrl = $( this ).children( '.gallery-thumbnail-image' ).css( 'background-image' );
                        imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
                        imageUrl = imageUrl.replace( /\"/g, '' );
                        
                    var imageTitle = $( this ).children( '.gallery-thumbnail-title' ).html();

                    $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
                    $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );
                    
                    $( this ).addClass( 'active' );
                    foundFirst = true;
                }
            }
        
        });
    
    });     
    
   /**
    *
    * change gallery image by clicking on it
    * 
    */
    
    $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).click( function() {
    
        if( !$( this ).hasClass( 'active' ) ) {
        
            $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).removeClass( 'active' );
            $( this ).addClass( 'active' );
            
            var imageUrl = $( this ).children( '.gallery-thumbnail-image' ).css( 'background-image' );
                imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
                imageUrl = imageUrl.replace( /\"/g, '' );
                
            var imageTitle = $( this ).children( '.gallery-thumbnail-title' ).html();

            $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
            $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );
        }
    
    });  
    
   /**
    *
    * next gallery image (click on "next" button)
    * 
    */
    
    $( '#gallery-popup .gallery-popup-content .gallery-current-image .gallery-next-image' ).click( function() {

        var images = [];
        var count = 0;
        var activeElementID = 0;
        
        $( '#gallery-popup .gallery-popup-content .gallery-thumbnail' ).each( function() {
        
            if( $( this ).css( 'display' ) != 'none' ) {
             
                images[count] = { 'element': $( this ) };
                
                if( $( this ).hasClass( 'active' ) ) activeElementID = count;
                count++;
            }
        
        });
        
        var nextElementID = activeElementID + 1 > images.length - 1 ? 0 : activeElementID + 1;
        var nextElement = images[nextElementID].element;
        
        $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).removeClass( 'active' );
        nextElement.addClass( 'active' );

        var imageUrl = nextElement.children( '.gallery-thumbnail-image' ).css( 'background-image' );
            imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
            imageUrl = imageUrl.replace( /\"/g, '' );
            
        var imageTitle = nextElement.children( '.gallery-thumbnail-title' ).html();

        $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
        $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );    
    
    });     
    
   /**
    *
    * previous gallery image (click on "prev" button)
    * 
    */
    
    $( '#gallery-popup .gallery-popup-content .gallery-current-image .gallery-prev-image' ).click( function() {

        var images = [];
        var count = 0;
        var activeElementID = 0;
        
        $( '#gallery-popup .gallery-popup-content .gallery-thumbnail' ).each( function() {
        
            if( $( this ).css( 'display' ) != 'none' ) {
             
                images[count] = { 'element': $( this ) };
                
                if( $( this ).hasClass( 'active' ) ) activeElementID = count;
                count++;
            }
        
        });
        
        var prevElementID = activeElementID == 0 ? images.length - 1 : activeElementID - 1;
        var prevElement = images[prevElementID].element;
        
        $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).removeClass( 'active' );
        prevElement.addClass( 'active' );

        var imageUrl = prevElement.children( '.gallery-thumbnail-image' ).css( 'background-image' );
            imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
            imageUrl = imageUrl.replace( /\"/g, '' );
            
        var imageTitle = prevElement.children( '.gallery-thumbnail-title' ).html();

        $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
        $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );
    
    });     
    
   /**
    *
    * close gallery popup 
    * 
    */
    
    $( '#gallery-popup #close-gallery-popup' ).click( function() {
    
        $( '#gallery-popup .gallery-popup-content' ).removeClass( 'bounceInDown' ).addClass( 'bounceOutUp' );
        setTimeout( function() {
                                                                                                             
            $( '#gallery-popup .gallery-popup-background' ).fadeOut( 300 );
            $( '#gallery-popup .gallery-popup-content' ).hide().removeClass( 'bounceOutUp' ).addClass( 'bounceInDown' );

        }, 400 );
    
    });    
    
   /**
    *
    * load chosen image
    * 
    */                 
    
    $( '.gallery .gallery-element' ).click( function() {
    
        var imageUrl = $( this ).children( '.padding' ).children( '.gallery-element-image' ).css( 'background-image' );
            imageUrl = imageUrl.replace( 'url(', '' ).replace( ')', '' );
            imageUrl = imageUrl.replace( /\"/g, '' );
        
        $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).each( function() {
        
            var element = $( this );
            var elementImageUrl = element.children( '.gallery-thumbnail-image' ).css( 'background-image' );
                elementImageUrl = elementImageUrl.replace( 'url(', '' ).replace( ')', '' );
                elementImageUrl = elementImageUrl.replace( /\"/g, '' );
            
            if( imageUrl == elementImageUrl ) {
            
                $( '#gallery-popup .gallery-thumbnails .gallery-thumbnail' ).removeClass( 'active' ).show();
                $( '#gallery-popup select[name="gallery-thumbnails-category"]' ).val( '*' );
                
                element.addClass( 'active' );
                $( '#gallery-popup .gallery-current-image' ).css({ 'background-image': 'url('+ imageUrl +')' });
                
                var imageTitle = element.children( '.gallery-thumbnail-title' ).html();
                $( '#gallery-popup .gallery-current-image .gallery-current-image-title h3' ).html( imageTitle );

                $.martanianOpenGalleryPopup();
            }
        
        });
    
    });                                            
    
   /**
    *
    * show payment method notice
    * 
    */                
    
    var currentPaymentMethod = 'direct-bank-transfer';
    $( '.payment-method input[type="checkbox"]' ).change( function() {

        var paymentMethod = $( this ).parent().parent().data( 'payment-method' );

        $( '.payment-method div[data-payment-method="'+ currentPaymentMethod +'"] .alert-box' ).slideToggle();
        $( '.payment-method div[data-payment-method="'+ currentPaymentMethod +'"] input[type="checkbox"]' ).removeAttr( 'checked' );
        
        $( '.payment-method div[data-payment-method="'+ paymentMethod +'"] .alert-box' ).slideToggle();
        currentPaymentMethod = paymentMethod;
            
    });
    
   /**
    *
    * appointment date and time settings
    *
    */
    
    $.martanianAppointmentDateTime = function() {
    
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();

        $( '.appointment .appointment-form .appointment-year option[value="'+ yyyy +'"]' ).attr( 'selected', 'selected' );
        $( '.appointment .appointment-form .appointment-year' ).children( 'option' ).each( function() {
        
            if( parseInt( $( this ).attr( 'value' ) ) < yyyy ) $( this ).attr( 'disabled', 'disabled' );
        
        });
        
        $.martanianAppointmentChangeYear( yyyy, mm );
    
    }; 
    
   /**
    *
    * change appointment date values
    * 
    */
    
    $.martanianAppointmentChangeYear = function( new_year ) {
    
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var new_month = 1;
        
        $( '.appointment .appointment-form .appointment-month option' ).removeAttr( 'disabled selected' );
        if( new_year == yyyy ) {
        
            $( '.appointment .appointment-form .appointment-month' ).children( 'option' ).each( function() {
        
                if( parseInt( $( this ).attr( 'value' ) ) < mm ) $( this ).attr( 'disabled', 'disabled' );
                else if( parseInt( $( this ).attr( 'value' ) ) == mm ) {
                
                    $( this ).attr( 'selected', 'selected' );
                    new_month = mm;
                }
            
            });
        }
        
        else {
        
            $( '.appointment .appointment-form .appointment-month option[value="1"]' ).attr( 'selected', 'selected' );
        }

        $.martanianAppointmentChangeMonth( new_year, new_month );
    }
    
    $.martanianAppointmentChangeMonth = function( new_year, new_month ) {

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        
        $( '.appointment .appointment-form .appointment-day option' ).removeAttr( 'disabled selected' );
        
        var daysInMonth = new Date( new_year, new_month, 0 ).getDate();
        
        if( daysInMonth < 31 ) $( '.appointment .appointment-form .appointment-day option[value="31"]' ).attr( 'disabled', 'disabled' );
        if( daysInMonth < 30 ) $( '.appointment .appointment-form .appointment-day option[value="30"]' ).attr( 'disabled', 'disabled' );
        if( daysInMonth < 29 ) $( '.appointment .appointment-form .appointment-day option[value="29"]' ).attr( 'disabled', 'disabled' );
        if( daysInMonth < 28 ) $( '.appointment .appointment-form .appointment-day option[value="28"]' ).attr( 'disabled', 'disabled' );
        
        if( new_year == yyyy && new_month == mm ) {
        
            $( '.appointment .appointment-form .appointment-day' ).children( 'option' ).each( function() {
        
                if( parseInt( $( this ).attr( 'value' ) ) < dd ) $( this ).attr( 'disabled', 'disabled' );
                else if( parseInt( $( this ).attr( 'value' ) ) == dd ) $( this ).attr( 'selected', 'selected' );
            
            });
        }
        
        else $( '.appointment .appointment-form .appointment-day option[value="1"]' ).attr( 'selected', 'selected' );
        
    };
    
    $( '.appointment .appointment-form select' ).change( function() {
    
        var elementType = $( this ).hasClass( 'appointment-year' ) ? 'year' : ( $( this ).hasClass( 'appointment-month' ) ? 'month' : 'day' );

        var year = $( '.appointment .appointment-form .appointment-year' ).val();
        var month = $( '.appointment .appointment-form .appointment-month' ).val();
        var day = $( '.appointment .appointment-form .appointment-day' ).val();
        
        if( elementType == 'year' ) $.martanianAppointmentChangeYear( year );
        else if( elementType == 'month' ) $.martanianAppointmentChangeMonth( year, month );
    
    });                                   

   /**
    *
    * open appointment popup action
    *
    */                      
    
    $( '.appointment .appointment-form .button' ).click( function() {

        var appointmentDateYear = $( '.appointment .appointment-form .appointment-year' ).val();
        var appointmentDateMonth = $( '.appointment .appointment-form .appointment-month' ).val();
        var appointmentDateDay = $( '.appointment .appointment-form .appointment-day' ).val();  
        var appointmentTime = $( '.appointment .appointment-form .appointment-time' ).val();
        
        var appointmentDate = appointmentDateYear +'-'+ appointmentDateMonth +'-'+ appointmentDateDay;
        $.openAppointmentPopup( appointmentDate, appointmentTime );

    });   
    
    $( '.appointment-button' ).click( function() {
        
        var appointmentDate = $( this ).data( 'appointment-date' );
        var appointmentTime = $( this ).data( 'appointment-time' );
        
        $.openAppointmentPopup( appointmentDate, appointmentTime );

    }); 
    
   /**
    *
    * open appointment popup function
    *
    */                               
    
    $.openAppointmentPopup = function( appointmentDate, appointmentTime ) {
    
        if( windowHeight < 650 ) {
        
            $( '#appointment-popup .appointment-popup-content' ).css({ 'position': 'absolute', 'top': '100px', 'margin-top': '0' });
            $( 'html, body' ).scrollTop( 70 );
        }
        
        else {
        
            $( '#appointment-popup .appointment-popup-content' ).css({ 'position': 'fixed', 'top': '50%', 'margin-top': '-262px' });
        }
        
        $( '#appointment-popup .appointment-popup-background' ).fadeIn( 300 );
        setTimeout( function() {
        
            $( '#appointment-popup .appointment-popup-content .reservation-date' ).html( appointmentDate );
            $( '#appointment-popup .appointment-popup-content .reservation-time' ).html( appointmentTime );
            
            $( '#appointment-popup .appointment-popup-content .appointment-popup-form input[name="appointment-date"]' ).attr( 'value', appointmentDate );
            $( '#appointment-popup .appointment-popup-content .appointment-popup-form input[name="approximate-time"]' ).attr( 'value', appointmentTime );
            
            $( '#appointment-popup .appointment-popup-content' ).show();

        }, 400 );
        
    };
    
   /**
    *
    * send appointment popup
    * 
    */

    $( '#appointment-popup .appointment-popup-form .button' ).click( function() {

        var form = $( this ).parent();
        var isError = false;
        var userFields = [];

        form.children( 'span.custom-dropdown' ).each( function() {

            var singleUserField = [
                $( this ).children( 'select' ).data( 'field-title' ),
                $( this ).children( 'select' ).val()
            ];
            
            userFields.push( singleUserField );
            if( $( this ).children( 'select' ).data( 'field-required' ) == true ) {
            
                if( $( this ).children( 'select' ).val() != '' ) $( this ).children( 'select' ).removeClass( 'error' );
                else {
                
                    $( this ).children( 'select' ).addClass( 'error' );
                    isError = true;
                }
            }
        
        });
        
        form.children( 'input' ).each( function() {

            var singleUserField = [
                $( this ).data( 'field-title' ),
                $( this ).val()
            ];

            userFields.push( singleUserField );
                                             
            if( $( this ).attr( 'name' ) == 'email' ) {
            
                var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                
                if( $( this ).val().match( emailReg ) ) $( this ).removeClass( 'error' );
                else {
                
                    $( this ).addClass( 'error' );
                    isError = true;
                }
            }
            
            else {
            
                if( $( this ).data( 'field-required' ) == true ) {
                
                    if( $( this ).val() != '' ) $( this ).removeClass( 'error' );
                    else {
                    
                        $( this ).addClass( 'error' );
                        isError = true;
                    }
                }
            }
        
        });
        
        form.children( 'textarea' ).each( function() {

            var singleUserField = [
                $( this ).data( 'field-title' ),
                $( this ).val()
            ];
            
            userFields.push( singleUserField );
            if( $( this ).data( 'field-required' ) == true ) {
            
                if( $( this ).val() != '' ) $( this ).removeClass( 'error' );
                else {
                
                    $( this ).addClass( 'error' );
                    isError = true;
                }
            }
        
        });
        
        if( isError == false ) {

            $.ajax({ url: '_assets/submit.php',
                     data: { 'send': 'appointment-form',
                             'values': userFields,
                             'clientName': form.children( 'input[name="name"]' ).val(),
                             'clientEmail': form.children( 'input[name="email"]' ).val()
                           },
                     type: 'post',
                     success: function( output ) {
    
                         var appointmentPopupHeight = $( '#appointment-popup .appointment-popup-content' ).height();
        
                         $( '#appointment-popup .appointment-popup-content' ).css({ 'minHeight': appointmentPopupHeight });
                         $( '#appointment-popup .appointment-popup-form' ).fadeOut( 300 );
                          
                         setTimeout( function() {
                                           
                             $( '#appointment-popup .appointment-send' ).fadeIn( 300 );
                             setTimeout( function() {

                                 appointmentPopupHeight = $( '#appointment-popup .appointment-popup-content .padding' ).height() + 50;
                                 var animateParams = {
                                     'minHeight': '',
                                     'height': appointmentPopupHeight,
                                     'marginTop': -( appointmentPopupHeight / 2 )
                                 };

                                 if( windowHeight < 650 ) animateParams.marginTop = 0;
                                 $( '#appointment-popup .appointment-popup-content' ).animate( animateParams, 300 );
                             
                             }, 100 );
                         
                         }, 300 );
                         
                   } });
        }
        
    });                  
    
   /**
    *
    * close appointment popup
    * 
    */
    
    $( '#appointment-popup #close-appointment-popup' ).click( function() {
    
        $( '#appointment-popup .appointment-popup-content' ).removeClass( 'bounceInDown' ).addClass( 'bounceOutUp' );
        setTimeout( function() {
        
            $( '#appointment-popup .appointment-popup-content' ).hide().removeClass( 'bounceOutUp' ).addClass( 'bounceInDown' );
            $( '#appointment-popup .appointment-popup-background' ).fadeOut( 300 );
        
        }, 200 );
    
    });                     
        
   /**
    *
    * getting section position
    * 
    */
    
    $.martanianGetSectionPosition = function( sectionName ) {

        if( typeof sectionName != 'undefined' && sectionName != '' ) { 
    
            var sectionName = sectionName.substr( 1 );
            var section = $( '*[data-section-name="'+ sectionName +'"]' );

            if( typeof section != 'undefined' && section !== false ) {
            
                var sectionOffset = section.offset();
                if( typeof sectionOffset != 'undefined' && sectionOffset !== false ) {
                
                    if( $( '*[data-section-name="'+ sectionName +'"]' ).hasClass( 'references' ) ) return( sectionOffset.top );
                    else return( sectionOffset.top - 50 );
                }
            }
        }
        
        return( 0 );
    };  
    
   /**
    *
    * scrolling to chosen section
    * 
    */

    $( 'body' ).martanianMenu();                                                       

   /**
    *
    * scroll "onload" to chosen section
    * 
    */    
    
    $.martanianScrollOnLoad = function() {
    
        var hash = window.location.hash;
        if( hash != '' && typeof hash != 'undefined' ) {
        
            var sectionPos = $.martanianGetSectionPosition( hash );
            $( 'html, body' ).scrollTop( sectionPos );
        }
    };                        
  
   /**
    *
    * end of functions
    * 
    */                

});

(function( $ ) {

   /**
    *
    * jQuery plugin for scrolling to chosen section
    * 
    */               
    
    $.fn.martanianMenu = function() {

       /**
        *
        * plugin selector
        * 
        */                               

        var pluginSelector = $( this ).selector;
        
       /**
        *
        * wait for action
        *         
        */ 
        
        $( pluginSelector +' a' ).click( function() {

            var hash = $( this ).context.hash;
            if( hash != '' && typeof hash != 'undefined' ) {

                var sectionPos = $.martanianGetSectionPosition( hash );
                $( 'html, body' ).animate({ scrollTop: sectionPos }, 1500 );
            }
        
        });                                                          
                                    
       /**
        *
        * end of line.
        *
        */                                        
    }     

}( jQuery )); 