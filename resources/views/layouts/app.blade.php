<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ cdn('favicon_io/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ cdn('favicon_io/favicon.ico')  }}" />
    <title>@yield('title')</title>
    @include('layouts.csslib.header_css')
    <!-- Styles -->
    @yield('head_css')

    @yield('head_js')
</head>
<body @section('body_class') class="page" @show>
@section('body')
    @yield('navbar')
    @yield('body_content_main')
@show
@include('layouts.jslib.footer_js')

</body>
</html>
