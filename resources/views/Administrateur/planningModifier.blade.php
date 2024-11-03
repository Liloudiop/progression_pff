<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('planning.editTraitement')}}" method="post">
        @csrf
    <h4>Modifier le planning</h4>
        <hr>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$plannings->id}}" id="id" />

        <label for="nom">Nom Planning</label>
        <input type="text" name="nom" id="nom" required value="{{$plannings->nom}}""> 

        <label for="files">Fichier</label>
        <input type="file" name="files" id="files" required value="{{$plannings->files}}>

        <label for="departement">Departement</label>
        <select name="departement" id="departement">
            <option value="TIC">TIC</option>
            <option value="Automobile">Automobile</option>

        </select>


        <label for="cours_filiere_id">Promotion</label>
        <select name="annee_id" >
            @foreach ($annee as $annee)
                <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
            @endforeach

        </select>

        

      
       
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour modifier <span>cette planning.</span> </p>
    </form>
