
<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('filieres.editTraitement')}}" method="post">
         <h4>Modifier Filiere</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$filieres->id}}" id="id" />
        <label>Nom</label>
        <input type="text" name="nom" id="nom" value="{{$filieres->name}}" >

        <label>description</label>
        <input type="text" name="description" id="description" value="{{$filieres->description}}" >

        <label>Departement</label></br>
        
        <select name="departement" id="departement">
            <option value="TIC">TIC</option>
            <option value="Automobile">Automobile</option>

        </select>
        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette <br><span>filiere.</span> </p>

    </form>
    

