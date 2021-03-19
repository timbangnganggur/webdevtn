<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Magangin - Perusahaan</title>
    <link href={{ asset('umum-asset/assets/img/logo/magangin-icon.png') }} rel="icon">
    
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('./company/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('./company/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('./company/css/startmin.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('./company/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Style Custom -->
    <link rel="stylesheet" href="{{asset('perusahaan-asset/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    @include('perusahaan.template.navbar')
    <!-- Page Content -->
    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->
    @include('perusahaan.template.footer')