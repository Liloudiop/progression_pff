<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('Formateurs.profil')

@section('conteneur')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Note</h2>

            <form class="student-form" action="{{ route('notes.store') }}" method="post">

                @csrf


                <div class="form-group">
                    <label for="apprenant_id">Apprenant</label>
                    <select name="apprenant_id">
                        @foreach ($apprenant as $apprenants)
                            <option value="{{ $apprenants->id }}">{{ $apprenants->nom_complet }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="moyenne">Moyenne</label>
                    <input type="number" name="moyenne" id="moyenne" required>
                </div>

                <div class="form-group">
                    <label for="evaluation_id">Evaluation</label>
                    <select name="evaluation_id">
                        @foreach ($evaluation as $evaluations)
                            <option value="{{ $evaluations->id }}">{{ $evaluations->nom }}</option>
                        @endforeach

                    </select>
                </div>

                





                <button type="submit" class="submit-btn">Ajouter</button>
                <button class="submit-btn" id="annuler"><a href="/notes.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
