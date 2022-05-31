<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>@yield('title') - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="MINI POS">
    <meta name="author" content="Fajar Siagian">
    <meta name="description" content="Majoo MINI POS">
    <meta name="keywords" content="MINI POS, dashboard, point of sales" />


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('volt-admin')}}/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('volt-admin')}}/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('volt-admin')}}/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('volt-admin')}}/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{asset('volt-admin')}}/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('volt-admin')}}/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('volt-admin')}}/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('volt-admin')}}/css/volt.css" rel="stylesheet">

    @stack('css')

</head>

<body>

    @include('admin.partials.sidebar')

    <main class="content">

        @include('admin.partials.navbar')

        @yield('content')

        @include('admin.partials.footer')
    </main>

   @include('admin.partials.footer-scripts')


</body>

</html>
