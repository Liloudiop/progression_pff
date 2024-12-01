<link rel="stylesheet" href="{{asset('css/accueil.css')}}">


@extends('layout')

    @section('content')


         <main class="main-content">
            <div class="header-search">
                <h1>Proschool: UN SYSTEME DE GESTION SCOLAIRE</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher...">
                </div>
            </div>

            <section class="welcome-section">
                <h2>Bienvenue sur Proschool</h2>
                <p>Votre solution complète pour la gestion scolaire. Suivez les performances des élèves, gérez les cours et optimisez les ressources scolaires.</p>
            </section>

            <div class="info-blocks">
                <div class="info-box">
                    <h3>APPRENANTS</h3>
                    <hr>
                    <p> <span style="color: rgb(54, 165, 42)">{{$apprenant->count()}}</span> Total des apprenants enregistrés.</p>
                </div>
                <div class="info-box">
                    <h3>Garçons</h3>
                    <hr>
                    <p>Garçons inscrits.</p>
                </div>
                <div class="info-box">
                    <h3>Filles</h3>
                    <hr>
                    <p>Filles inscrites.</p>
                </div>
                <div class="info-box">
                    <h3>Salles</h3>
                    <hr>
                    <p><span style="color: rgb(54, 165, 42)">{{$salles->count()}}</span> Salles Totales.</p>
                </div>
            </div>

            <div class="buttons-section">
                <div class="static-info">
                    <button class="last-records-btn">{{$apprenant->count()}} derniers Enregistrés</button>
                    <p>STATIC SCOLAIRE</p>
                    <p>SALLE DISPONIBLE</p>
                </div>
            </div>

            <div class="data-section">
                <h3>Informations</h3>
                <div class="data-row header-row">
                    <sp>Nom</sp>
                    <sp>Date Naissance</sp>
                    <sp>Etat</sp>
                    <sp>Email</sp>
                    <sp>Numero</sp>
                </div>
                <div class="data-row">
                    <span>001</span>
                    <span>Jean</span>
                    <span>Dupont</span>
                    <span>1A</span>
                    <span>1000€</span>
                    <span>Paris</span>
                    <span>0123456789</span>
                    <span>M</span>
                    <span>
                        <button>Modifier</button>
                        <button>Supprimer</button>
                        <button>Ajouter</button>
                    </span>
                </div>
                <!-- Ajoute d'autres lignes de données ici -->
            </div>
        </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer> 
    @endsection