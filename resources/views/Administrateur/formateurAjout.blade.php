<link rel="stylesheet" href="{{asset('css/create2.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('formateursNew.store')}}" method="post">
        @csrf
    <h4>Ajouter Formateur</h4>
        <hr>
     
      
        <label for="nom_complet">Nom Complet *</label>
        <input type="text" name="nom_complet" id="nom_complet" required> 



        <label for="date_naissance">Date de naissance *</label><br>
        <input type="date" name="date_naissance" id="date_naissance" required>

        <label for="rib">RIB *</label><br>
        <input type="text" name="rib" id="rib" maxlength="24" placeholder="code banque{5}, code agence {5}, numero compte {12}, cle {2}"  required >
  
      
  
        <div class="column" id="column">   
  
          <div class="box">     
            <label for="lieu_naissance">Lieu de naissance *</label><br>
            <input type="text" name="lieu_naissance" id="lieu_naissance" required>
          </div> 
  
          <div class="box">   
            <label for="email">Email *</label><br>
            <input type="email" name="email" id="email" required>
          </div> 
         
        </div>
  
  
      
        <div class="column" >      
  
          <div class="box">
          <label class="label" for="numero">Numero *</label><br>
          <input type="text" name="numero" id="numero" required>
          </div> 
          <div class="box">
            
            <label for="cni">CNI *</label><br>
            <input type="text" name="cni" maxlength="13" id="cni" required >
          </div>
        </div>
  
        <div class="column">        
          <div class="box">
            
            <label for="banque">Banque *</label><br>
            <input type="text" name="banque" id="banque" required>
          </div> 
          <div class="box">

            <label for="specialite">Specialite *</label><br>
            <input type="text" name="specialite" id="specialite" required>
      
            
          </div> 
        </div>
        
       
        <input type="submit" value="Valider">
        <button class="annuler"><a href="{{route('formateursNew.lister')}}">Annuler</a></button>

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p style="text-align: center" class="p">Merci de remplir tous les champs  pour ajouter un formateur. </p>
    </form>

{{-- 
    <script>
      function validateNumberLength() {
        const phoneInput = document.getElementById("cni");
        const maxLength = 13;

        console.log(phoneInput);
        
        
        if (phoneInput.value.length < maxLength) {
          alert("Le numéro du carte d'identite doit composè de 13 chiffres.");
          return false;
        }
        return true;
      }

      validateNumberLength();
      </script> --}}