<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
    <meta charset="utf-8" />
    <title>@yield('title') | SaTu - Saling Bantu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/header_logo.svg')}}">
        @include('auth.layout.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('dashboard.layouts.vendor-scripts')
    </body>
</html>
