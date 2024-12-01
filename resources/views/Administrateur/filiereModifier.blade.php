

<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      
    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier Filiere</h2>

            <form class="student-form" action="{{route('filieres.editTraitement')}}" method="post">

                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$filieres->id}}" id="id" />

                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" id="nom" value="{{$filieres->name}}" >
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" name="description" id="description" value="{{$filieres->description}}" >
                </div>
                <div class="form-group">
                    <label for="departement">Departement</label>
                    <select name="departement" id="departement">
                        <option value="TIC">TIC</option>
                        <option value="Automobile">Automobile</option>

                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Modifier</button>
                <button class="submit-btn" id="annuler"><a href="/filieres.liste">Annuler</a></button>
            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection

