<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Boolean.Careers | Corso Web Dev</title>
</head>
<body>

  <!-- Layout -->

  {{-- Header --}}
  @include('partials.header')


  {{-- Main --}}
  @yield('content')


  {{-- Footer --}}
  @include('partials.footer')
  
  <link rel="stylesheet" href="{{asset('js/app.js')}}">
</body>
</html>