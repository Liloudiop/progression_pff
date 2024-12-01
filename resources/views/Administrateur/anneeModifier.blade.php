<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier L'annee</h2>

            <form class="student-form" action="{{ route('annees.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')



                <input type="hidden" name="id" id="id" value="{{ $annee->id }}" id="id" />


                <div class="form-group">


                    <label for="nom_annee">Nom</label>
                    <input type="text" name="nom" id="nom_annee" value="{{ $annee->nom_promotion }}" required>
                </div>

                <div class="form-group">
                    <label for="date_debut">Date Debut</label>
                    <input type="date" name="date_debut" id="date_debut" value="{{$annee->date_debut}}" required>
                </div>

                <div class="form-group">
                    <label for="date_fin">Date Fin</label>
                    <input type="date" name="date_fin" id="date_fin" value="{{$annee->date_fin}}" required>
                </div>





                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/annees.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
