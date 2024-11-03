<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('sallesNew.store')}}" method="post">
        @csrf
    <h4>Ajouter Salle</h4>
        <hr>

        <label for="nom_salle">Nom Salle</label>
        <input type="text" name="nom_salle" id="nom_salle" required> 

        <label for="capacite">Capacite</label>
        <input type="text" name="capacite" id="capacite" required>

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

        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <span>un salle.</span> </p>
    </form>
