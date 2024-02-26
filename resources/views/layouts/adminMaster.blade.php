<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/admin/assets" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Loop Care Admin Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    {{-- STYLE CSS --}}
    @include('layouts.adminStyle')

</head>

<body>

    {{-- CONTENT --}}
    @yield('content')


    {{-- JAVA SCRIPT --}}
    @include('layouts.adminJs')
    @include('layouts.notification_alerts')

</body>

</html>
