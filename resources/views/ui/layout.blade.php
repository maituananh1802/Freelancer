<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {!! SEO::generate() !!}
    <meta name="author" content="Ngô Hùng Phúc">
    <link rel="shortcut icon" href="/images/favicon.png">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/valid/css/formValidation.min.css" rel="stylesheet">
    <link href="/css/magicsuggest-min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap-slider.min.css">
</head>

<body id="home">

<div id="loader">
    <i class="fa fa-cog fa-4x fa-spin"></i>
</div>

@include('ui.menu')
@yield('content')
@yield('userInfo')
@include('ui.footer')

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap-slider.min.js"></script>
<script src="/js/modernizr.custom.79639.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/retina.min.js"></script>
<script src="/js/scrollReveal.min.js"></script>
<script src="/js/jquery.ba-cond.min.js"></script>
<script src="/js/jquery.slitslider.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/parallax.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.nouislider.all.min.js"></script>
<script src="/js/bootstrap-wysiwyg.js"></script>
<script src="/js/jflickrfeed.min.js"></script>
<script src="/js/fancybox.pack.js"></script>
<script src="/js/magic.js"></script>
<script src="/js/settings.js"></script>
<script src="/js/user.js"></script>
<script src="/valid/js/formValidation.min.js"></script>
<script src="/valid/js/bootstrap.min.js"></script>
<script src="/js/jquery.form.js"></script>
<script src="/js/fileinput.min.js"></script>
<script src="/js/magicsuggest-min.js"></script>

</body>

</html>