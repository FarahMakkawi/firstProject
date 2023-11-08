<!doctype html>
<html lang="en">

<head>
    @include('layout.partials.head')
 </head>

<body>

   @include('layout.partials.navbar')
  

  @yield('content')

  @yield('footer')

  @include('layout.partials.scripts')

</body>

</html>

