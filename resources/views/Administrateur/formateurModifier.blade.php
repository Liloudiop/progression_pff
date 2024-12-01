<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Modifier Formateur</h2>

            <form class="student-form" action="{{ route('formateursNew.editTraitement') }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')



                <input type="hidden" name="id" id="id" value="{{$formateur->id}}" id="id" />


                <div class="form-group">
                    <label for="nom_complet">Nom Complet *</label>
                    <input type="text" name="nom_complet" id="nom_complet" required value="{{$formateur->nom_complet}}"> 
                </div>

                <div class="form-group">
                    <label for="specialite">Specialite *</label><br>
                    <input type="text" name="specialite" id="specialite" required value="{{$formateur->specialite}}">
                </div>

                <div class="form-group">
                    <label for="date_naissance">Date de naissance *</label><br>
                    <input type="date" name="date_naissance" id="date_naissance" required value="{{$formateur->date_naissance}}">
                </div>

                <div class="form-group">
                    <label for="lieu_naissance">Lieu de naissance *</label><br>
                    <input type="text" name="lieu_naissance" id="lieu_naissance" required value="{{$formateur->lieu_naissance}}">


                </div>

                <div class="form-group">
                    
                    <label for="email">Email *</label><br>
                    <input type="email" name="email" id="email" required value="{{$formateur->email}}">
                    
                </div>
                
                <div class="form-group">
                    <label class="label" for="numero">Numero *</label><br>
                    <input type="text" name="numero" id="numero" required value="{{$formateur->telephone}}"> 
                </div>

                <div class="form-group">
                    <label for="cni">CNI *</label><br>
                    <input type="text" name="cni" id="cni" required min="12" value="{{$formateur->cni}}">
                </div>

                <div class="form-group">
                    <label for="banque">Banque *</label><br>
                    <input type="text" name="banque" id="banque" required value="{{$formateur->nom_banque}}">
                </div>

                <div class="form-group">
                    <label for="rib">RIB *</label><br>
                    <input type="text" name="rib" id="rib" required value="{{$formateur->rib}}"> 
                </div>

                <button type="submit" class="submit-btn">Modifier </button>
                <button class="submit-btn" id="annuler"><a href="/formateursNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
