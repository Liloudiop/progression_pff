<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">


                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="formateurNew.settings"><img  class="nav__toggle" id="nav-toggle" style="border-radius: 40%; width:110px ;" src="/images/11.png" alt="photo"></a>
                    {{-- <a href="#" class="nav__logo">Admin</a> --}}

                </div>
                <div class="nav__list">
                    <a href="{{route('indexHome')}}" class="nav__link active">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="{{route('apprenant.liste')}}" class="nav__link">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Apprenant</span>
                    </a>

                    <div  class="nav__link collapse">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Support</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="{{route('filiere.liste')}}" class="collapse__sublink">Filieres</a>
                            <a href="{{route('coursNew.liste')}}" class="collapse__sublink">Cours</a>
                            <a href="{{route('sallesNew.liste')}}" class="collapse__sublink">Salles</a>
                            <a href="{{route('pffNew.liste')}}" class="collapse__sublink">PFF</a>
                        </ul>
                    </div>

                    <a href="{{route('formateursNew.lister')}}" class="nav__link">
                        <ion-icon name="document-text-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Formateurs </span>
                    </a>
    
                    <div class="nav__link collapse">
                        <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Autres</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="{{route('planning.liste')}}" class="collapse__sublink">Planning</a>
                            <a href="{{route('semestres.liste')}}" class="collapse__sublink">Semestres</a>
                            <a href="{{route('annees.liste')}}" class="collapse__sublink">Annees</a>
                        </ul>
                    </div>
                    <a href="{{route('formateurNew.settings')}}" class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Settings</span>
                    </a>
                </div>
            </div>

            <a href="/" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

<main>
    <section>
        {{-- <img src="/images/5.jpg" alt="Image"> --}}
        {{-- <h1>Bienvenue {{$formateur->nom_complet}}</h1> --}}
       




      
    </section>
</main>
<!-- ===== IONICONS ===== -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

<!-- ===== MAIN JS ===== -->
{{-- <script src="/Js/apprenantProfile.js"></script> --}}
{{-- <script src="../../public/Js/apprenantProfile.js'"></script> --}}
{{-- <script src="{{ asset('Js/apprenantProfile.js') }}"></script> --}}

<script>
    /*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, navbarId, bodyId)=>{
const toggle = document.getElementById(toggleId),
navbar = document.getElementById(navbarId),
bodypadding = document.getElementById(bodyId)

if(toggle && navbar){
toggle.addEventListener('click', ()=>{
navbar.classList.toggle('expander')

bodypadding.classList.toggle('body-pd')
})
}
}
showMenu('nav-toggle','navbar','body-pd')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))


/*===== COLLAPSE MENU  =====*/ 
const linkCollapse = document.getElementsByClassName('collapse__link')
var i

for(i=0;i<linkCollapse.length;i++){
linkCollapse[i].addEventListener('click', function(){
const collapseMenu = this.nextElementSibling
collapseMenu.classList.toggle('showCollapse')

const rotate = collapseMenu.previousElementSibling
rotate.classList.toggle('rotate')
})
}



</script>
</body>
</html>