<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('Formateurs.profil')

@section('conteneur')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier le support</h2>

            <form class="student-form" action="{{ route('support.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')

                <input type="hidden" name="id" id="id" value="{{ $support->id }}" id="id" />

                <div class="form-group">
                    <label>Nom support</label>
                    <input type="text" name="nom" id="nom" value="{{ $support->nom_support }}">
                </div>

                <div class="form-group">
                    <label for="files">Files</label>
                    <input type="file" name="files" id="files" required value="{{ $support->files }}">
                </div>

                <div class="form-group">
                    <label for="salle_filiere_id">Filiere</label>
                    <select name="filiere_id">

                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>
                </div>

                



                <button type="submit" class="submit-btn">Modifier</button>
                <button class="submit-btn" id="annuler"><a href="/support.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
