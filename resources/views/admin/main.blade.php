<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  @include('admin.style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('admin.navbar')
    @include('admin.sidebar')

    @yield('content')

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  @include('admin.footer')
</div>

@include('admin.script')
@yield('script')
</body>
</html>
