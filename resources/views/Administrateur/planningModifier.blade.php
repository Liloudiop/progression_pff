<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier Planning</h2>

            <form class="student-form" action="{{ route('planning.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')




                <input type="hidden" name="id" id="id" value="{{ $plannings->id }}" id="id" />


                <div class="form-group">
                    <label for="nom">Nom Planning</label>
                    <input type="text" name="nom" id="nom" required value="{{ $plannings->nom }}">
                </div>

                <div class="form-group">
                    <label for="files">Fichier</label>
                    <input type="file" name="files" id="files" required value="{{ $plannings->files }}">
                </div>

                <div class="form-group">
                    <label for="departement">Departement</label>
                    <select name="departement" id="departement">
                        <option value="TIC">TIC</option>
                        <option value="Automobile">Automobile</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="cours_filiere_id">Promotion</label>
                    <select name="annee_id">
                        @foreach ($annee as $annee)
                            <option value="{{ $annee->id }}">{{ $annee->nom_promotion }}</option>
                        @endforeach

                    </select>


                </div>

                

                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/planning.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
