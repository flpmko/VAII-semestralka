<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ECAVZA production</title>
    <link rel="shortcut icon" type="image/jpg" href="../imgs/ez-logo.svg" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @include('includes.navbar')
    <div class="container-for-footer">
        @yield('obsah')
    </div>
    @include('includes.footer')
</body>

</html>
