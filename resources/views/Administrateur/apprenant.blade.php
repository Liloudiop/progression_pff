<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/apprenant.css">
    <title>Gestion Scolaire</title>
</head>
<body>
    <header class="header">
        <h1>Gestion Scolaire</h1>
    </header>

    <div class="container">
        <div class="sidebar">
            <h1>VOIR L'ESPACE ADMIN</h1>
            <hr>
            <button class="btn">Tableau de Bord</button>
            <nav class="nav-links">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Administrateur</a></li>
                    <li><a href="#">Apprenants</a></li>
                    <li><a href="#">Scolarités</a></li>
                    <li><a href="#">Formateurs</a></li>
                    <li><a href="#">Cours</a></li>
                    <li><a href="#">Notes</a></li>
                    <li><a href="#">Salles</a></li>
                    <li><a href="#">Classes</a></li>
                </ul>
            </nav>
        </div>
        <main class="main-content">
            <div class="header-search">
                <h1>Proschool: UN SYSTEME DE GESTION SCOLAIRE</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher...">
                </div>
            </div><div class="info-blocks">
                <!-- Suppression des petits tableaux -->
            </div>
            <div class="grey-button">
            </div>
            
            <div class="buttons-section">
                <div class="static-info">
                    <div class="orange-button">
                        <a href="#listes-enseignants">LISTE DES Apprenants</a><br>
                        <a href="#ajouter-enseignant">Ajouter un apprenant</a>
                    </div>
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
                </div>
                <!-- Ajoute d'autres lignes de données ici -->
            </div>
            <footer class="footer">
                <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
            </footer>
</body>
</html>
