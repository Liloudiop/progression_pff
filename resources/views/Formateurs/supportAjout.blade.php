<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('Formateurs.profil')

@section('conteneur')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Cours</h2>

            <form class="student-form" action="{{ route('support.store') }}" method="post">
                @csrf


                <div class="form-group">
                    <label for="nom">Nom Support</label>
                    <input type="text" name="nom" id="nom" required>
                </div>

                <div class="form-group">
                    <label for="files">Fichier</label>
                    <input type="file" name="files" id="files" required>
                </div>

                <div class="form-group">
                    <label for="salle_filiere_id">Filiere</label>
                    <select name="filiere_id">

                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>
                </div>





                <button type="submit" class="submit-btn">Ajouter </button>
                <button class="submit-btn" id="annuler"><a href="/support.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
