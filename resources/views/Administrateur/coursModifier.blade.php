
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('coursNew.editTraitement')}}" method="post">
         <h4>Modifier Cours</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cours->id}}" id="id" />
        <label>Nom</label>
        <input type="text" name="nom" id="nom" value="{{$cours->nom_cours}}" >

        <label for="module">Module</label>
        <input type="number" name="module" id="module" required value="{{$cours->module}}">


        <label for="cours_filiere_id">Filiere</label>
        <select name="cours_filiere_id"  value="{{$cours->cours_filiere_id}}">
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

        </select>

        <label for="filiere">Formateur</label>
        <select name="cours_formateur_id"  value="{{$cours->cours_filiere_id}}">
            @foreach ($formateurs as $formateurs)
                <option value="{{$formateurs->id}}" >{{$formateurs->nom_complet}}</option>
            @endforeach

        </select>

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <span>cours.</span> </p>

    </form>
    

