
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bee Surprize</title>
    @include('frontend.partial.style')
    @yield('style')
</head>

<body id="app">

  @include('frontend.partial.navbar')

  @yield('content')

  @include('frontend.partial.footer')
  @include('frontend.partial.script')
  @yield('script')
</body>

</html>
