<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/apprenantProfil.css')}}">
    <link rel="stylesheet" href="{{asset('Js/apprenantProfile.js')}}">
    <link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">
    <link rel="shortcut icon" href="/images/logo2.png">

    <title>Espace Apprenant</title>
</head>
<body>
   @include('Apprenants.header')
   @include('Apprenants.layoutProfil')
   @yield('conteneur')
</body>
</html>