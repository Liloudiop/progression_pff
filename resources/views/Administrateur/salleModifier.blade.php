
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('sallesNew.editTraitement')}}" method="post">
         <h4>Modifier Salle</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$salles->id}}" id="id" />
        <label for="nom_salle">Nom Salle</label>
        <input type="text" name="nom_salle" id="nom_salle" required value="{{$salles->nom_salle}}"> 

        <label for="capacite">Capacite</label>
        <input type="text" name="capacite" id="capacite" required value="{{$salles->capacite}}">

        <label for="emplacement">Emplacement</label>
        <select name="emplacement" id="emplacement">
            <option value="Zone A">Zone A</option>
            <option value="Zone B">Zone B</option>
        </select>

        <label for="salle_filiere_id">Filiere</label>
        <select name="salle_filiere_id" >
            {{-- <option value="">--filière--</option> --}}
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

       </select>

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <span>salle.</span> </p>

    </form>
    

