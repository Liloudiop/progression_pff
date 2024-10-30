
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

@extends('Formateurs.profil')

    @section('conteneur')

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('documentation.editTraitement')}}" method="post">
         <h4>Modifier cette documentation</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$documentation->id}}" id="id" />
        <label>Nom</label>
        <input type="text" name="nom" id="nom" value="{{$documentation->Nom}}" >

        <label for="lien">Lien</label>
        <input type="text" name="lien" id="lien" required value="{{$documentation->lien}}">


        

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <br><span>documentation.</span> </p>

    </form>
    


    @endsection