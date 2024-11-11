<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">
    
    <title>Gestion Scolaire</title>
</head>
<body>
    {{-- <header class="header">
        <h1>Gestion Scolaire</h1>
    </header> --}}

    <div class="container">
        <div class="sidebar">
            <h1>VOIR L'ESPACE ADMIN</h1>
            <hr>
            <button class="btn">Tableau de Bord</button>
            <nav class="nav-links">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="{{route('apprenant.liste')}}">Apprenants</a></li>
                    <li><a href="{{route('filiere.liste')}}">Filieres</a></li>
                    <li><a href="{{route('formateursNew.lister')}}">Formateurs</a></li>
                    <li><a href="{{route('coursNew.liste')}}">Cours</a></li>
                    <li><a href="{{route('annees.liste')}}">Annees</a></li>
                    <li><a href="{{route('sallesNew.liste')}}">Salle</a></li>
                    <li><a href="{{route('pffNew.liste')}}">PFF</a></li>
                    <li><a href="{{route('planning.liste')}}">Planning</a></li>
                    <li><a href="{{route('semestres.liste')}}">Semestre</a></li>
                    <li><a href="{{route('evaluations.liste')}}">Evaluation</a></li>
                </ul>
            </nav>
        </div>
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
                    <p>Total des apprenants enregistrés.</p>
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
                    <p>Salles Totales.</p>
                </div>
            </div>

            <div class="buttons-section">
                <div class="static-info">
                    <button class="last-records-btn">10 derniers Enregistrés</button>
                    <p>STATIC SCOLAIRE</p>
                    <p>SALLE DISPONIBLE</p>
                </div>
            </div>

            <div class="data-section">
                <h3>Informations</h3>
                <div class="data-row header-row">
                    <span>Matricule</span>
                    <span>Prenom</span>
                    <span>Nom</span>
                    <span>Classe</span>
                    <span>Cout annuel</span>
                    <span>Ville Naiss</span>
                    <span>Tel</span>
                    <span>Sex</span>
                    <span>Action</span>
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
</body>
</html>
