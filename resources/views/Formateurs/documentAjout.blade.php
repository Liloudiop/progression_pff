<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">


@extends('Formateurs.profil')


    @section('conteneur')
        <title> Systeme de Gestion Scolaire</title>
    
    
        <form action="{{route('documentation.store')}}" method="post">
            @csrf
        <h4>Ajouter Cours</h4>
            <hr>
    
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required> 
    
            <label for="lien">lien</label>
            <input type="text" name="lien" id="lien" required>
    
    
          
           
            <input type="submit" value="Valider">
    
            {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
            <p class="p">Merci de remplir tous les champs  pour ajouter <br><span>un documentation.</span> </p>
        </form>
    
    @endsection