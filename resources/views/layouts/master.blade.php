<html>
<head>
    <title>@yield('title')</title>
    <link rel="canonical" href="{{ url()->current() }}" />
    @section('meta')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        {{--Android Chrome--}}
        <meta name="theme-color" content="#63C6AE">
        {{--iOS Safari--}}
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    @show
    @section('css')
    @show
    @section('js')
    @show
</head>
@yield('body')
</html>