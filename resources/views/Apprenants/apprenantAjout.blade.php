<link rel="stylesheet" href="{{ asset('Js/formulaire.css') }}">
<link rel="shortcut icon" href="/images/logo2.png">

<title> Systeme de Gestion Scolaire</title>


<link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">


@extends('layout')

@section('content')
    <main class="main-content">

        <div class="form-tout">
            <h2>Ajouter Apprenant</h2>

            <form class="student-form" action="{{ route('apprenant.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="nom_complet">Nom complet *</label>
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
                    <label for="">Etat *</label>
                    <select name="etat" id="etat">
                        <option value="Celibataire">Celibataire</option>
                        <option value="Marier">Marier</option>

                    </select>

                </div>

                <div class="form-group">
                    <label for="cours_filiere_id">Filiere</label>
                    <select name="cours_filiere_id">
                        @foreach ($filieres as $filiere)
                            <option value="{{ $filiere->id }}">{{ $filiere->name }}</option>
                        @endforeach

                    </select>

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
                    <input type="text" name="cni" id="cni" required min="12">

                </div>


                <div class="form-group">
                    <label for="adresse_domicile">Adresse Domicile *</label><br>
                    <input type="text" name="adresse_domicile" id="adresse_domicile" required>

                </div>


                <div class="form-group">
                    <label for="nom_tuteur">Nom Tuteur *</label><br>
                    <input type="text" name="nom_tuteur" id="nom_tuteur" required>
                </div>

                <div class="form-group">
                    <label for="region_origine">Region d'origine *</label><br>
                    <input type="text" name="region_origine" id="region_origine" required>
                </div>

                <div class="form-group">
                    <label for="ville_origine">Ville d'origine *</label><br>
                    <input type="text" name="ville_origine" id="ville_origine" required>
                </div>

                <div class="form-group">
                    <label for="nom_parent">Nom Parent *</label><br>
                    <input type="text" name="nom_parent" id="nom_parent" required>
                </div>


                <div class="form-group">
                    <label for="numero_parent">Numero Parent *</label><br>
                    <input type="text" name="numero_parent" id="numero_parent" required>
                </div>



                <button type="submit" class="submit-btn">Ajouter </button>
                <button class="submit-btn" id="annuler"><a href="/apprenant.liste">Annuler</a></button>

            </form>
        </div>
    </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
@endsection
