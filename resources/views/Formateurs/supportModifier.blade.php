
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">


@extends('Formateurs.profil')

    @section('conteneur')
  

    <form action="{{route('support.editTraitement')}}" method="post">
       <h4>Modifier cette support</h4>

      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$support->id}}" id="id" />
      <label>Nom support</label>
      <input type="text" name="nom" id="nom" value="{{$support->nom_support}}" >

      <label for="files">Files</label>
      <input type="file" name="files" id="files" required value="{{$support->files}}">

      <label for="salle_filiere_id">Filiere</label>
      <select name="filiere_id" >

          @foreach ($filieres as $filiere)
              <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
          @endforeach

     </select>
      

      <input type="submit" value="Valider" >
      <p class="p">Merci d'apporter des modifications pour cette <br><span>support.</span> </p>

  </form>
  
    @endsection