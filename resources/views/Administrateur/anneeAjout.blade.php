<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Annee</h2>

            <form class="student-form" action="{{ route('annees.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom">Nom Promotion</label>
                     <input type="text" name="nom" id="nom" required> 
                </div>
                <div class="form-group">
                    <label for="date_debut">Date Debut</label>
                    <input type="date" name="date_debut" id="date_debut" required>
                </div>
                <div class="form-group">
                    <label for="date_fin">Date Fin</label>
                    <input type="date" name="date_fin" id="date_fin" required>

                </div>

                

                <button type="submit" class="submit-btn">Ajouter </button>
                <button class="submit-btn" id="annuler"><a href="annees.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
