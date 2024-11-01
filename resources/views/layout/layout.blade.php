<!DOCTYPE html>
<html lang="en">
@include('component.head')
<body class="bg-success-subtle">
    @include('component.navbar')
    @yield('content')
    @include('component.footer')
    @include('component.common-js')
    @yield('extra-js')
</body>
</html>
