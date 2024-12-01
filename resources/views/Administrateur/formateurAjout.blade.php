<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Formateur</h2>

            <form class="student-form" action="{{ route('formateursNew.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom_complet">Nom Complet *</label>
                    <input type="text" name="nom_complet" id="nom_complet" required> 
                </div>

                <div class="form-group">
                    <label for="date_naissance">Date de naissance *</label><br>
                    <input type="date" name="date_naissance" id="date_naissance" required>
                </div>

                <div class="form-group">
                    <label for="lieu_naissance">Lieu de naissance *</label><br>
                    <input type="text" name="lieu_naissance" id="lieu_naissance" required>

                </div>

                <div class="form-group">
                    <label for="email">Email *</label><br>
                    <input type="email" name="email" id="email" required>

                </div>


                <div class="form-group">
                    <label class="label" for="numero">Numero *</label><br>
                    <input type="text" name="numero" id="numero" required>

                </div>


                <div class="form-group">
                    <label for="cni">CNI *</label><br>
                    <input type="text" name="cni" maxlength="13" id="cni" required >

                </div>

                <div class="form-group">
                    <label for="banque">Banque *</label><br>
                    <input type="text" name="banque" id="banque" required>

                </div>


                <div class="form-group">
                    <label for="rib">RIB *</label><br>
                    <input type="text" name="rib" id="rib" maxlength="24" placeholder="code banque {5}, code guichet {5}, numero compte {12}, cle rib {2}"  required >

                </div>


                <div class="form-group">
                    <label for="specialite">Specialite *</label><br>
                    <input type="text" name="specialite" id="specialite" required>
                </div>

                

                <button type="submit" class="submit-btn">Ajouter </button>
                <button class="submit-btn" id="annuler"><a href="/formateursNew.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
