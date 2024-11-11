<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="/filieres.store1" method="post">
        @csrf
    <h4>Ajouter Filiere</h4>
        <hr>

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required> 

        <label for="description">Description</label>
        <input type="text" name="description" id="description" required>

        <label for="departement">Departement</label>
        <select name="departement" id="departement">
            <option value="TIC">TIC</option>
            <option value="Automobile">Automobile</option>

        </select>
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <span>un filiere.</span> </p>
    </form>
