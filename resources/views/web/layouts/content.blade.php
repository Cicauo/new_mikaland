<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Mida Karya Abadi Land">
        <meta name="author" content="DynamicLayers">
       
        <title>Mika Karya Abadi Land</title>

        @include('web.layouts.css')
        @stack('css')
    </head>

    <body data-spy="scroll" data-target="#navmenu" data-offset="70">

        {{-- @include('web.layouts.spinner') --}}

        @include('web.layouts.header')

        @yield('content')

        @include('web.layouts.footer')

        <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_carrot-up"></i></a>

        @include('web.layouts.js')

        @stack('js')
      
    </body>
</html>

        