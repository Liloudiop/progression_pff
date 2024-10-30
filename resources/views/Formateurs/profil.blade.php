<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/formateur.css')}}">
    <link rel="stylesheet" href="{{asset('Js/apprenantProfile.js')}}">
    <link rel="shortcut icon" href="/images/logo2.png">


    
    <title>Espace Formateur</title>
</head>
<body>
    @include('Formateurs.layoutProfilFormateur')
   @yield('conteneur')
</body>
</html>