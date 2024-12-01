<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier PFF</h2>

            <form class="student-form" action="{{ route('pffNew.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')

                <input type="hidden" name="id" id="id" value="{{ $pff->id }}" id="id" />



                <div class="form-group">
                    <label>Nom Acteur</label>
                    <input type="text" name="nom_acteur" id="nom_acteur" required value="{{ $pff->nom_acteur }}">
                </div>

                <div class="form-group">
                    <label for="name">Nom du theme</label>
                    <input type="text" name="name" id="name" required value="{{ $pff->nom_theme }}">
                </div>

                <div class="form-group">
                    <label for="image">Document</label>
                    <input type="file" name="image" id="image" required value="{{ $pff->files }}">
                </div>

                <div class="form-group">
                    <label for="pff_filiere_id">Filiere</label>
                    <select name="pff_filiere_id" value="{{ $pff->filieres }}">
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>


                </div>

                <div class="form-group">

                    <label for="pff_filiere_id">Annee</label>
                    <select name="pff_annee_id" value="{{ $pff->id }}">
                        @foreach ($annee as $annee)
                            <option value="{{ $annee->id }}">{{ $annee->nom_promotion }}</option>
                        @endforeach

                    </select>

                </div>



                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/pffNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
