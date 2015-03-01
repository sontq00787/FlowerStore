$( document ).ready( function() {

   /**
    *
    * strict mode
    * 
    */               

    'use strict';
    
   /**
    *
    * insert plugin code to website
    * after page load    
    *
    */                
    
    $( window ).load( function() {
    
        var html = '<div id="demo-switcher"><div class="demo-switcher-background"></div><div class="demo-switcher-content"><div class="demo-switcher-button"><i class="fa fa-refresh"></i> Switch demo</div><div class="demo-switcher-title"><h3>Check another <span>demo page!</span></h3><p>or <a href="http://themeforest.net/item/loriette-html5-multipurpose-template/9331854" class="button button-green">Purchase now!</a></p></div><div class="demo-switcher-single-demo" style="background-image: url( \'http://demo.martanian.com/html/loriette/pizza/_assets/_img/fresh-pizza.jpg\' );"><a href="http://demo.martanian.com/html/loriette/pizza/index.html"><div class="padding"><h3>Pizza restaurants</h3></div></a></div><div class="demo-switcher-single-demo" style="background-image: url( \'http://demo.martanian.com/html/loriette/car-repairs/_assets/_img/mechanic-portrait.jpg\' );"><a href="http://demo.martanian.com/html/loriette/car-repairs/index.html"><div class="padding"><h3>Car repairs</h3></div></a></div><div class="demo-switcher-single-demo" style="background-image: url( \'http://demo.martanian.com/html/loriette/hairdressers/_assets/_img/hairdressers-working-on-their-clients-at-the-hair-salon.jpg\' );"><a href="http://demo.martanian.com/html/loriette/hairdressers/index.html"><div class="padding"><h3>Hairdressers</h3></div></a></div><div class="demo-switcher-single-demo" style="background-image: url( \'http://demo.martanian.com/html/loriette/florists/_assets/_img/happy-florist.jpg\' );"> <a href="http://demo.martanian.com/html/loriette/florists/index.html"><div class="padding"><h3>Florists</h3></div></a></div><div class="demo-switcher-single-demo" style="background-image: url( \'http://demo.martanian.com/html/loriette/veterinarians/_assets/_img/header-home.jpg\' );"><a href="http://demo.martanian.com/html/loriette/veterinarians/index.html"><div class="padding"><h3>Veterinarians</h3></div></a></div></div></div>';
        $( 'body' ).prepend( html );
    
    });
    
   /**
    *
    * switcher visible flag
    * 
    */                
    
    var switcherVisible = false;
    
   /**
    *
    * action after click on demo switcher button
    * 
    */                
    
    $( 'body' ).on( 'click', '#demo-switcher .demo-switcher-button', function() {
                                
        var switcherButton = $( this );
        var switcher = switcherButton.parent().parent();
        var switcherContent = switcher.children( '.demo-switcher-content' );

        if( switcherVisible == false ) {
        
            var windowWidth = $( window ).width();
            var elementSize = ( windowWidth / 5 ) - 7.7;
        
            switcherContent.animate({ 'height': elementSize }, 500 );
            $( '#demo-switcher .demo-switcher-background' ).fadeIn( 300 );
            
            setTimeout( function() {
    
                $( '#demo-switcher .demo-switcher-single-demo .padding' ).css({ 'height': elementSize - 60 });

                switcherButton.children( 'i' ).removeClass( 'fa-refresh' ).addClass( 'fa-times' );
                switcherButton.addClass( 'bottom-radius' ).animate({ 'top': '0' }, 300 );
    
                setTimeout( function() {
                
                    $( '#demo-switcher .demo-switcher-title' ).fadeIn( 300 );
                
                }, 500 );
    
            }, 50 );
            
            switcherVisible = true;
        }
        
        else {
        
            switcherContent.animate({ 'height': '0' }, 500 );
            $( '#demo-switcher .demo-switcher-background' ).fadeOut( 300 );
            $( '#demo-switcher .demo-switcher-title' ).fadeOut( 300 );
            
            setTimeout( function() {
    
                $( '#demo-switcher .demo-switcher-single-demo .padding' ).css({ 'height': '' });

                switcherButton.children( 'i' ).removeClass( 'fa-times' ).addClass( 'fa-refresh' );
                switcherButton.removeClass( 'bottom-radius' ).animate({ 'top': '-44px' }, 300 );
    
            }, 500 );
            
            switcherVisible = false;
        }
    
    });
    
   /**
    *
    * action after resize window
    * 
    */                
    
    $( window ).resize( function() {
    
        if( switcherVisible == true ) {
        
            var switcherContent = $( '#demo-switcher .demo-switcher-content' );
            var switcherButton = $( '#demo-switcher .demo-switcher-button' );
           
            switcherContent.animate({ 'height': '0' }, 500 );
            $( '#demo-switcher .demo-switcher-background' ).fadeOut( 300 );
            $( '#demo-switcher .demo-switcher-title' ).fadeOut( 300 );
            
            setTimeout( function() {
    
                $( '#demo-switcher .demo-switcher-single-demo .padding' ).css({ 'height': '' });

                switcherButton.children( 'i' ).removeClass( 'fa-times' ).addClass( 'fa-refresh' );
                switcherButton.removeClass( 'bottom-radius' ).animate({ 'top': '-44px' }, 300 );
    
            }, 500 );
            
            switcherVisible = false;
        }
    
    });
    
   /**
    *
    * end of file.
    * 
    */                

});