<!DOCTYPE html>
<html>
<head>
    <title> @yield('title', 'Home') | Blog Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
    <style type="text/css">
        p {
            word-wrap: break-word;
        }
    </style>
</head>
<body>
<div class="container">
    <header>
    @include('front.templates.partials.header')
    </header>
    @yield('content')

    <footer>
        <hr>
        Todos los derechos reservados &copy {{ date('Y') }}
        <div class="pull-right">Eduardo Salinas</div>
</footer>
</div>

<script src="{{asset('plugins/jquery/jquery-3.2.1.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://eduardosalinas.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//eduardosalinas.disqus.com/count.js" async></script>
</body>
</html>
