<!DOCTYPE html>
<html lang="eng">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{$title}}</title>

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('preneur-lab-news/vendors/mdi/css/materialdesignicons.min.css')}}"/>

    <link rel="stylesheet" href="{{asset('preneur-lab-news/assets/vendors/aos/dist/aos.css/aos.css')}}"/>

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{asset('preneur-lab-news/images/favicon.png')}}"/>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('preneur-lab-news/css/style.css')}}">
    <!-- endinject -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>

<div class="container-scroller">
<div class="main-panel">
