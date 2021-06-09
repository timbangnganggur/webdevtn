<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @include('general.style')
  <style>
    body {
      background-color: #F4F1DE;
    }
  </style>
  <title>@yield('title')</title>
</head>

<body>
  @include('general.header')
  @yield('content')
  @include('general.footer')
  @include('general.script')
</body>

</html>