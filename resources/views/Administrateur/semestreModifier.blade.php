<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier Semestre</h2>

            <form class="student-form" action="{{ route('semestres.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')


                <input type="hidden" name="id" id="id" value="{{ $semestre->id }}" id="id" />


                <div class="form-group">

                    <label for="nom_annee">Nom Semestre</label>
                    <input type="text" name="nom" id="nom_annee" value="{{ $semestre->nom_semestre }}" required>
                </div>

                <div class="form-group">
                    <label for="annee_id">Promotion</label>
                    <select name="annee_id">
                        @foreach ($annee as $annee)
                            <option value="{{ $annee->id }}">{{ $annee->nom_promotion }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="date_debut">Date Debut</label>
                    <input type="date" name="date_debut" id="date_debut" value="{{$semestre->date_debut}}" required>
                </div>

                <div class="form-group">
                    <label for="date_fin">Date Fin</label>
                    <input type="date" name="date_fin" id="date_fin" value="{{$semestre->date_fin}}" required>


                </div>



                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/semestres.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
