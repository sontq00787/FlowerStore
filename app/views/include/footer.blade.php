<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    {{HTML::script('_libs/jquery-2.1.1.min.js')}}
    {{HTML::script('_libs/smoothscroll.js')}}
    {{HTML::script('_libs/demo-switcher/demo-switcher.js')}}
    {{HTML::script('_js/functions.js')}}

    <!--
    facebook SDK
    -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1476325629301808&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>