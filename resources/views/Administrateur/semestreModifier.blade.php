
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
      <form action="{{route('semestres.editTraitement')}}" method="post">
         <h4>Modifier Annee</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$semestre->id}}" id="id" />

        <label for="nom_annee">Nom Semestre</label>
        <input type="text" name="nom" id="nom_annee" value="{{$semestre->nom_semestre}}" required> 

        <label for="annee_id">Promotion</label>
        <select name="annee_id" >
          @foreach ($annee as $annee)
              <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
          @endforeach

      </select>

        <label for="date_debut">Date Debut</label>
        <input type="date" name="date_debut" id="date_debut" value="{{$semestre->date_debut}}" required>

        <label for="date_fin">Date Fin</label>
        <input type="date" name="date_fin" id="date_fin" value="{{$semestre->date_fin}}" required>

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <span>semestre.</span> </p>

    </form>
    

