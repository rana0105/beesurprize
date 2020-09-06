
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
    @toastr_css
</head>

<body>
  <div id="app">
    @if(!empty($indexHeader))
    @include('frontend.partial.navbar')
    @else
    @include('frontend.partial.navbar1')
    @endif
    @yield('content')
  </div>
  @include('frontend.partial.footer')
  @include('frontend.partial.modal')
  @include('frontend.partial.script')
  @php $user = Auth::user() @endphp
  @if($user)
  <script>
    window.localStorage.setItem('user', '<?php echo $user ?>');
  </script>
  @endif
  @yield('script')
  @toastr_js
  @toastr_render
</body>

</html>
