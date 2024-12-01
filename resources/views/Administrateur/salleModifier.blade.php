<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier Salle</h2>

            <form class="student-form" action="{{ route('sallesNew.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')

                <input type="hidden" name="id" id="id" value="{{ $salles->id }}" id="id" />



                <div class="form-group">
                    <label for="nom_salle">Nom Salle</label>
                    <input type="text" name="nom_salle" id="nom_salle" required value="{{ $salles->nom_salle }}">
                </div>

                <div class="form-group">
                    <label for="capacite">Capacite</label>
                    <input type="text" name="capacite" id="capacite" required value="{{ $salles->capacite }}">
                </div>

                

                <div class="form-group">
                    <label for="emplacement">Emplacement</label>
                    <select name="emplacement" id="emplacement"
                        >
                        <option value="Zone A">Zone A</option>
                        <option value="Zone B">Zone B</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="salle_filiere_id">Filiere</label>
                    <select name="salle_filiere_id">

                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>


                </div>


                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/sallesNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
