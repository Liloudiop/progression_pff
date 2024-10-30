<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

@extends('Formateurs.profil')

    @section('conteneur')



    
    
        <form action="{{route('support.store')}}" method="post">
            @csrf
        <h4>Ajouter Support</h4>
            <hr>
    
            <label for="nom">Nom Support</label>
            <input type="text" name="nom" id="nom" required> 
    
            <label for="files">Fichier</label>
            <input type="file" name="files" id="files" required>
    
    
            <label for="salle_filiere_id">Filiere</label>
            <select name="filiere_id" >

                @foreach ($filieres as $filiere)
                    <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
                @endforeach
    
           </select>
           
            <input type="submit" value="Valider">
    
            {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
            <p class="p">Merci de remplir tous les champs  pour ajouter <br><span>un support.</span> </p>
        </form>
    @endsection