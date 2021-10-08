<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('img/Logo.png') }}"/>
  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  @include('general.style')
  @yield('style')
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
  @include('general.modalLogin')
  @include('general.script')
  @yield('script')
  <script type="text/javascript">
    $('#perusahaan').select2({
      placeholder: "Perusahaan",
    });
    $('#jenis-pekerjaan').select2({
      placeholder: "Jenis Pekerjaan",
    });
    $('#wilayah').select2({
      placeholder: "Kabupaten/Kota",
    });
  </script>
</body>
</html>