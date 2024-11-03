
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('pffNew.editTraitement')}}" method="post">
         <h4>Modifier Le projet PFF</h4> <hr>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$pff->id}}" id="id" />
        <label>Nom Acteur</label>
        <input type="text" name="nom_acteur" id="nom_acteur" required value="{{$pff->nom_acteur}}"> 


        <label for="name">Nom du theme</label>
        <input type="text" name="name" id="name" required value="{{$pff->nom_theme}}">
        
        <label for="image">Document</label>
        <input type="file" name="image" id="image" required value="{{$pff->files}}"> 

        <label for="pff_filiere_id">Filiere</label>
        <select name="pff_filiere_id"  value="{{$pff->filieres}}">
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

        </select>


        


        <label for="pff_filiere_id">Annee</label>
        <select name="pff_annee_id"  value="{{$pff->id}}">
            @foreach ($annee as $annee)
                <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
            @endforeach

        </select>
        

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <span>pff.</span> </p>

    </form>
    

