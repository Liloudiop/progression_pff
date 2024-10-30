<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/formateurProfil.css')}}">
    <link rel="stylesheet" href="{{asset('Js/apprenantProfile.js')}}">
    
    <title>Espace Formateur</title>
</head>
<body>
    @include('Administrateur.layoutFormateurpp')
   @yield('conteneur')
</body>
</html>