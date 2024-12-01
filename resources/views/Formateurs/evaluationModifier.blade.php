<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('Formateurs.profil')

@section('conteneur')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier cette Evaluation</h2>

            <form class="student-form" action="{{ route('evaluations.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')



                <input type="hidden" name="id" id="id" value="{{ $evaluations->id }}" id="id" />

                <div class="form-group">
                    <label for="nom">Nom Evaluation</label>
                    <input type="text" name="nom" id="nom" required value="{{ $evaluations->nom }}">
                </div>

                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="type" value="{{ $evaluations->type }}">
                        <option value="Exercice">Exercice</option>
                        <option value="Devoir">Devoir</option>
                        <option value="Examen">Examen</option>
                        <option value="PFF">PFF</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" required value="{{ $evaluations->date }}">
                </div>

                <div class="form-group">
                    <label for="filiere_id">Filiere</label>
                    <select name="filiere_id">
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="annee_id">Promotion</label>
                    <select name="annee_id">
                        @foreach ($annees as $annee)
                            <option value="{{ $annee->id }}">{{ $annee->nom_promotion }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="semestre_id">Semestre</label>
                    <select name="semestre_id">
                        @foreach ($semestres as $semestres)
                            <option value="{{ $semestres->id }}">{{ $semestres->nom_semestre }}</option>
                        @endforeach

                    </select>
                </div>





                <button type="submit" class="submit-btn">Modifier</button>
                <button class="submit-btn" id="annuler"><a href="/evaluations.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
