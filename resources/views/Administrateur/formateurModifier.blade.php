
<link rel="stylesheet" href="{{asset('css/create2.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('formateursNew.editTraitement')}}" method="post">
         <h4>Modifier Formateur</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$formateur->id}}" id="id" />
        <label for="nom_complet">Nom Complet *</label>
        <input type="text" name="nom_complet" id="nom_complet" required value="{{$formateur->nom_complet}}"> 


        <label for="specialite">Specialite *</label><br>
        <input type="text" name="specialite" id="specialite" required value="{{$formateur->specialite}}">
  
        <label for="date_naissance">Date de naissance *</label><br>
        <input type="date" name="date_naissance" id="date_naissance" required value="{{$formateur->date_naissance}}">
  
      
  
        <div class="column" id="column">   
  
          <div class="box">     
            <label for="lieu_naissance">Lieu de naissance *</label><br>
            <input type="text" name="lieu_naissance" id="lieu_naissance" required value="{{$formateur->lieu_naissance}}">
          </div> 
  
          <div class="box">   
            <label for="email">Email *</label><br>
            <input type="email" name="email" id="email" required value="{{$formateur->email}}">
          </div> 
         
        </div>
  
  
      
        <div class="column" >      
  
          <div class="box">
          <label class="label" for="numero">Numero *</label><br>
          <input type="text" name="numero" id="numero" required value="{{$formateur->telephone}}">
          </div> 
          <div class="box">
            
            <label for="cni">CNI *</label><br>
          <input type="text" name="cni" id="cni" required min="12" value="{{$formateur->cni}}">
          </div>
        </div>
  
        <div class="column">        
          <div class="box">
            
            <label for="banque">Banque *</label><br>
            <input type="text" name="banque" id="banque" required value="{{$formateur->nom_banque}}">
          </div> 
          <div class="box">
            
            <label for="rib">RIB *</label><br>
            <input type="text" name="rib" id="rib" required value="{{$formateur->rib}}">
          </div> 
        </div>

      

        <input type="submit" value="Valider" >
        <p class="p">Merci d'apporter des modifications pour cette formateur. </p>

    </form>
    

