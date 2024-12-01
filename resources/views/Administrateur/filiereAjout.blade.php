
<link rel="stylesheet" href="{{asset('Js/formulaire.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Filiere</h2>

            <form class="student-form" action="/filieres.store1" method="post">
        @csrf

                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" required>
                </div>
                <div class="form-group">
                    <label for="departement">Departement</label>
                    <select name="departement" id="departement">
                        <option value="TIC">TIC</option>
                        <option value="Automobile">Automobile</option>

                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Ajouter</button>
                <button class="submit-btn" id="annuler"><a href="filieres.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection



