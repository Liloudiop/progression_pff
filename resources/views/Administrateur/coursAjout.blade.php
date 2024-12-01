<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Cours</h2>

            <form class="student-form" action="{{ route('coursNew.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom">Nom Cours</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="module">Module</label>
                    <input type="number" name="module" id="module" required>
                </div>
                <div class="form-group">
                    <label for="cours_filiere_id">Filiere</label>
                    <select name="cours_filiere_id">
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>

                </div>


                <div class="form-group">
                    <label for="filiere">Formateur</label>
                    <select name="cours_formateur_id">
                        @foreach ($formateurs as $formateurs)
                            <option value="{{ $formateurs->id }}">{{ $formateurs->nom_complet }}</option>
                        @endforeach

                    </select>

                </div>

                <button type="submit" class="submit-btn">Ajouter</button>
                <button class="submit-btn" id="annuler"><a href="coursNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
