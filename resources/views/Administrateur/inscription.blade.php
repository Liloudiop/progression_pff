<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FICHE D’INSCRIPTION PÉDAGOGIE</title>
    <link rel="stylesheet" href="css/inscription.css"> <!-- Lien vers ton CSS -->
</head>
<body>
    <header>
        <!-- Header existant -->
    </header>

    <nav>
        <!-- Barre de recherche existante -->
        <h1>Tableau de bord</h1>
    </nav>

    <main>
        <h2>FICHE D'INSCRIPTION PÉDAGOGIE</h2>

        <table>
            <tr>
                <th>PROMO</th>
                <th>Orientation Initiale</th>
                <th>Orientation Définitive</th>
            </tr>
            <tr>
                <td><!-- Information Promo --></td>
                <td><!-- Information Orientation Initiale --></td>
                <td><!-- Information Orientation Définitive --></td>
            </tr>
        </table>

        <h3>2I. ÉTAT CIVIL ET COORDONNÉES DE L'APPRENANT</h3>
        <div>
            <label for="prenomNom">Prénom Nom:</label>
            <input type="text" id="prenomNom" placeholder="Prénom Nom">

            <label for="dateNaissance">Né(e) le:</label>
            <input type="date" id="dateNaissance">

            <label for="statut">Célibataire / Marié(e):</label>
            <select id="statut">
                <option value="celibataire">Célibataire</option>
                <option value="marie">Marié(e)</option>
            </select>

            <label for="nationalite">Nationalité:</label>
            <input type="text" id="nationalite" placeholder="Nationalité">
        </div>

        <table>
            <tr>
                <th>N° Tel:</th>
                <th>Email:</th>
                <th>NIN:</th>
            </tr>
            <tr>
                <td><input type="tel" placeholder="N° Tel"></td>
                <td><input type="email" placeholder="Email"></td>
                <td><input type="text" placeholder="NIN"></td>
            </tr>
            <tr>
                <td><input type="tel" placeholder="Tel 2:"></td>
                <td><input type="email" placeholder="Mail 2"></td>
                <td><input type="text" placeholder="NIN modif"></td>
            </tr>
        </table>

        <p>Adresse du domicile (région du domicile):</p>
        <input type="text" placeholder="Adresse">

        <p>Prénom et Nom du Tuteur (parent):</p>
        <input type="text" placeholder="Prénom et Nom du Tuteur">

        <p>N° Tel (tuteur):</p>
        <input type="tel" placeholder="N° Tel Tuteur">

        <p>Région d'origine:</p>
        <input type="text" placeholder="Région d'origine">

        <p>Ville ou Village d'origine:</p>
        <input type="text" placeholder="Ville ou Village d'origine">

        <p>Prénom et Nom du parent (régions):</p>
        <input type="text" placeholder="Prénom et Nom du parent">

        <p>N° Tel:</p>
        <input type="tel" placeholder="N° Tel Parent">

        <h3>II. RÉFÉRENCES DU BACCALAURÉAT</h3>
        <p>Statut:</p>
        <input type="text" placeholder="Statut">

        <p>INE:</p>
        <input type="text" placeholder="INE">

        <p>Année Bac:</p>
        <input type="text" placeholder="Année Bac">

        <p>Série Bac:</p>
        <input type="text" placeholder="Série Bac">

        <p>Mention:</p>
        <input type="text" placeholder="Mention">

        <p>N° quittance:</p>
        <input type="text" placeholder="N° quittance">

        <h3>III. VISITE CONTRE VISITE MÉDICALE</h3>
        <table>
            <tr>
                <th>Handicap</th>
                <th>Aptitude au métier et recommandation du médecin</th>
                <th>Signature et cachet service médical</th>
            </tr>
            <tr>
                <td><input type="text" placeholder="Handicap"></td>
                <td><input type="text" placeholder="Aptitude et recommandation"></td>
                <td><input type="text" placeholder="Signature et cachet"></td>
            </tr>
        </table>
    </main>

    <footer>
        <!-- Footer existant -->
    </footer>
</body>
</html>
