<!doctype html>
<html lang="en">

@include('partials.headerClient')

<body>

@if(\Request::is('client/*'))
    @include('partials.navbarClient')
@else

    @include('partials.navbarClientHome')
@endif

    @yield('content')

@if(\Request::is('client/*'))
    @include('partials.footerClient')
    @include('partials.dependencies')
@else
    @include('partials.dependenciesClient')
@endif
</body>
</html>
