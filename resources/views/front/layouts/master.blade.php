<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    @include('front.layouts.head')

</head>

<body>
  <div class="main-wrapper">

    @include('front.layouts.navbar')

  <section class="contentleft-right">
    

    @yield('content')

    </section><!-- contentleft-right -->
    @include('front.layouts.footer')
    @include('front.layouts.footer-js')
</body>
</html>