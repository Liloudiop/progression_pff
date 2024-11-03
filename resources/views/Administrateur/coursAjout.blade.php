<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('coursNew.store')}}" method="post">
        @csrf
    <h4>Ajouter Cours</h4>
        <hr>

        <label for="nom">Nom Cours</label>
        <input type="text" name="nom" id="nom" required> 

        <label for="module">Module</label>
        <input type="number" name="module" id="module" required>


        <label for="cours_filiere_id">Filiere</label>
        <select name="cours_filiere_id" >
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

        </select>

        <label for="filiere">Formateur</label>
        <select name="cours_formateur_id" >
            @foreach ($formateurs as $formateurs)

                <option value="{{$formateurs->id}}" >{{$formateurs->nom_complet}}</option>
            @endforeach

        </select>
      
       
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <span>un cours.</span> </p>
    </form>
