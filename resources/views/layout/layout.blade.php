<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body>
    @include('component.navbar')
    @yield('content')
    @include('component.footer')
    @include('component.common-js')
    @yield('extra-js')
</body>
</html>
