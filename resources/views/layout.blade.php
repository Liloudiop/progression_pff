<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/layoutHome.css')}}">
    <link rel="stylesheet" href="{{asset('Js/apprenantProfile.js')}}">
    <link rel="shortcut icon" href="/images/logo2.png">

    <title>Systeme de Gestion Scolaire</title>

</head>
<body>
    @include('home')
    @yield('content')

</body>
</html>