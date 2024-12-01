<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('Formateurs.profil')

@section('conteneur')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier cette documentation</h2>

            <form class="student-form" action="{{ route('documentation.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')


                <input type="hidden" name="id" id="id" value="{{ $documentation->id }}" id="id" />

                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" id="nom" value="{{ $documentation->Nom }}">
                </div>

                <div class="form-group">
                    <label for="lien">Lien</label>
                    <input type="text" name="lien" id="lien" required value="{{ $documentation->lien }}">
                </div>

                <div class="form-group">
                    <label for="filiere_id">Filiere</label>
                    <select name="filiere_id">
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>
                </div>





                <button type="submit" class="submit-btn">Modifier</button>
                <button class="submit-btn" id="annuler"><a href="/documentation.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
