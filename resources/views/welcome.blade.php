<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

    
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


<body>
    <h1>Systeme de Gestion Scolaire</h1>
    <h2 id="cible">.... </h2>
    <section >
        
        <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{route('apprenant.liste')}}">Apprenant</a>
                    </li>
                    <li>
                        <a href="{{route('filiere.liste')}}">Filiere</a>
                    </li>
                    <li>
                        <a href="{{route('formateursNew.lister')}}">Formateur</a>
                    </li>
                    <li>
                        <a href="{{route('coursNew.liste')}}">Cours</a>
                    </li>
                   



                    <li class="seconnecter">
                        <a href="{{route('annees.liste')}}">Annee</a>
                    </li>
                    <li>
                        <a href="{{route('sallesNew.liste')}}">Salle</a>
                    </li>
                    <li>
                        <a href="{{route('pffNew.liste')}}">PFF</a>
                    </li>
                    <li>
                        <a href="{{route('apprenantImg.create')}}">PP</a>
                    </li>
                    <li>
                        <a href="#">Major</a>
                    </li>
                </ul>
            </div>

            
    </section>
    

    <script>
        const cible = document.getElementById('cible');
// let mytableau1 = ['Developpeur','Graphiste','Cryptologue'];e
let mytableau = ["Cette Application"," est en cours de production","developper par Falilou diop! ","avec ses collegues", "telle que Rougy Lamine et Salimata"," ensemble nous rendrons cette application meilleur."];
let wordIndex = 0;
let letterIndex = 0;

const samayLettre = () => {
    const letter = document.createElement("span");
    cible.appendChild(letter);

    letter.textContent = mytableau[wordIndex][letterIndex];

    setTimeout(() => {
        letter.remove();
        
    }, 2800);
};


const boucler = () => {
    setTimeout(() => {
        if (wordIndex >= mytableau.length) {
            wordIndex = 0;
            letterIndex = 0;
            boucler();
            
        }
          else if (letterIndex < mytableau[wordIndex].length) {
            samayLettre();
            letterIndex++;
            boucler();
            
        }

        else {
            wordIndex++;
            letterIndex = 0;
            setTimeout(() => {
                boucler();
                
            }, 2800);
        }
        
    }, 80);
};
boucler();
    </script>