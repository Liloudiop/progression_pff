<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
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
            </div>
            <div class="form-tout">
                <h3>Formulaire d'Inscription des Apprenants</h3>
                <form class="student-form">
                    <div class="form-group">
                        <label for="matricule">Matricule:</label>
                        <input type="text" id="matricule" name="matricule" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="classe">Classe:</label>
                        <input type="text" id="classe" name="classe" required>
                    </div>
                    <div class="form-group">
                        <label for="cout-annuel">Coût Annuel:</label>
                        <input type="number" id="cout-annuel" name="cout-annuel" required>
                    </div>
                    <div class="form-group">
                        <label for="ville-naissance">Ville de Naissance:</label>
                        <input type="text" id="ville-naissance" name="ville-naissance" required>
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone:</label>
                        <input type="tel" id="tel" name="tel" required>
                    </div>
                    <div class="form-group">
                        <label for="sexe">Sexe:</label>
                        <select id="sexe" name="sexe" required>
                            <option value="M">Masculin</option>
                            <option value="F">Féminin</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Ajouter Apprenant</button>
                </form>
            </div>
        </main>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Gestion Scolaire. Tous droits réservés.</p>
    </footer>
</body>
</html>
