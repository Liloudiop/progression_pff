<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('semestres.store')}}" method="post">
        @csrf
    <h4>Ajouter Semestre</h4>
        <hr>

        <label for="nom">Nom Semestre</label>
        <input type="text" name="nom" id="nom" required> 

        <label for="annee_id">Promotion</label>
        <select name="annee_id" >
            @foreach ($annee as $annee)
                <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
            @endforeach

        </select>

        <label for="date_debut">Date Debut</label>
        <input type="date" name="date_debut" id="date_debut" required>

        <label for="date_fin">Date Fin</label>
        <input type="date" name="date_fin" id="date_fin" required>

       
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <span>une semestre.</span> </p>
    </form>
