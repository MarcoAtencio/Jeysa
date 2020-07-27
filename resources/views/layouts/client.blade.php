<!doctype html>
<html lang="en">

@include('partials.headerClient')

<body>

@include('partials.navbarClient')
@yield('content')
@include('partials.footerClient')

@include('partials.dependenciesClient')
</body>
</html>
