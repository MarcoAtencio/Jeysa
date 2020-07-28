<!doctype html>
<html lang="en">

@include('partials.headerClient')

<body>

@if(\Request::is('man/*'))
    @include('partials.navbarClient')
@else
    @include('partials.navbarClientHome')
@endif

@yield('content')

@if(\Request::is('/'))
    @include('partials.dependencies')
@else
    @include('partials.dependenciesClient')
    @include('partials.footerClient')
@endif
</body>
</html>
