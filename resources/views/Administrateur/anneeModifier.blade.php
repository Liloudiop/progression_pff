
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
      <form action="{{route('annees.editTraitement')}}" method="post">
         <h4>Modifier L'annèe</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$annee->id}}" id="id" />

        <label for="nom_annee">Nom</label>
        <input type="text" name="nom" id="nom_annee" value="{{$annee->nom_promotion}}" required> 

        <label for="date_debut">Date Debut</label>
        <input type="date" name="date_debut" id="date_debut" value="{{$annee->date_debut}}" required>

        <label for="date_fin">Date Fin</label>
        <input type="date" name="date_fin" id="date_fin" value="{{$annee->date_fin}}" required>

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <span>annee.</span> </p>

    </form>
    

