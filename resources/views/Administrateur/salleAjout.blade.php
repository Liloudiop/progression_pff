<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Salle</h2>

            <form class="student-form" action="{{ route('sallesNew.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom_salle">Nom Salle</label>
                    <input type="text" name="nom_salle" id="nom_salle" required>
                </div>
                <div class="form-group">
                    <label for="capacite">Capacite</label>
                    <input type="text" name="capacite" id="capacite" required>
                </div>
                <div class="form-group">
                    <label for="emplacement">Emplacement</label>
                    <select name="emplacement" id="emplacement">
                        <option value="Zone A">Zone A</option>
                        <option value="Zone B">Zone B</option>
                    </select>

                </div>


                <div class="form-group">
                    <label for="salle_filiere_id">Filiere</label>
                    <select name="salle_filiere_id" >
            
                        @foreach ($filieres as $filiere)
                            <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
                        @endforeach
            
                   </select>

                </div>

                <button type="submit" class="submit-btn">Ajouter </button>
                <button class="submit-btn" id="annuler"><a href="sallesNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
