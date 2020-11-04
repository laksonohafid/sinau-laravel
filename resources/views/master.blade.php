<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<style>
    body{
        background: url("bg/satu.jpg") no-repeat fixed;
        background-size: cover;
        background-position: absolute;
    }
</style>
<body>
   @include('navigasi')
    @yield('content')

</body>
</html>