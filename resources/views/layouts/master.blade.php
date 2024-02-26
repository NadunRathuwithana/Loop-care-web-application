<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Loop Care | Physiotherapy & Medical Consultation Service</title>

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    {{-- STYLE CSS --}}
    @include('layouts.userStyles')

</head>

<body>

    {{-- CONTENT --}}
    @yield('content')

    <!-- footer -->

    {{-- JAVA SCRIPT --}}
    @include('layouts.userJs')
    @yield('scripts')
    @include('layouts.notification_alerts')
</body>

</html>
