
<link rel="stylesheet" href="{{asset('css/create2.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">

<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>

      <form action="{{route('apprenant.editTraitement')}}" method="post">
         <h4>Modifier Apprenant</h4>

        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$apprenants->id}}" id="id" />
       

      
        <label for="nom_complet">Nom complet *</label>
        <input type="text" name="nom_complet" id="nom_complet" value="{{$apprenants->nom_complet}}" required> 
  
    
        <label for="date_naissance">Date de naissance *</label><br>
        <input type="date" name="date_naissance" id="date_naissance" value="{{$apprenants->date_naissance}}" required>
  
        <label for="">Etat *</label>
        <select name="etat" id="etat" value="{{$apprenants->etat}}">
          <option value="Celibataire">Celibataire</option>
          <option value="Marier">Marier</option>
  
      </select>

      <label for="cours_filiere_id">Filiere</label>
      <select name="cours_filiere_id" value="{{$apprenants->filiere_id}}" >
          @foreach ($filieres as $filiere)
              <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
          @endforeach

      </select>
        
      
  
        <div class="column" id="column">   
  
          <div class="box">     
            <label for="lieu_naissance">Lieu de naissance *</label><br>
            <input type="text" name="lieu_naissance" id="lieu_naissance" value="{{$apprenants->lieu_naissance}}" required>
          </div> 
  
          <div class="box">   
            <label for="email">Email *</label><br>
            <input type="email" name="email" id="email" value="{{$apprenants->email}}" required>
          </div> 
         
        </div>
  
       
      
        <div class="column" >      
  
          <div class="box">
          <label class="label" for="numero">Numero *</label><br>
          <input type="text" name="numero" id="numero" value="{{$apprenants->numero1}}" required>
          </div> 
          <div class="box">
            
            <label for="cni">CNI *</label><br>
          <input type="text" name="cni" id="cni" value="{{$apprenants->cni}}" required min="12">
          </div>
        </div>
  
        <div class="column">        
          <div class="box">
            
            <label for="adresse_domicile">Adresse Domicile *</label><br>
            <input type="text" name="adresse_domicile" id="adresse_domicile" value="{{$apprenants->adresse_domicile}}" required>
          </div> 
          <div class="box">
            
            <label for="nom_tuteur">Nom Tuteur *</label><br>
            <input type="text" name="nom_tuteur" id="nom_tuteur" value="{{$apprenants->nom_tuteur}}" required>
          </div> 
        </div>
  
  
        <div class="column">        
          <div class="box">
            
            <label for="region_origine">Region d'origine *</label><br>
            <input type="text" name="region_origine" id="region_origine" value="{{$apprenants->region_origine}}" required>
          </div> 
          <div class="box">
            
            <label for="ville_origine">Ville d'origine *</label><br>
            <input type="text" name="ville_origine" id="ville_origine" value="{{$apprenants->ville_origine}}" required>
          </div> 
        </div>
  
  
        <div class="column">        
          <div class="box">
            
            <label for="nom_parent">Nom Parent *</label><br>
            <input type="text" name="nom_parent" id="nom_parent" value="{{$apprenants->nom_parent}}" required>
          </div> 
          <div class="box">
            
            <label for="numero_parent">Numero Parent *</label><br>
            <input type="text" name="numero_parent" id="numero_parent" value="{{$apprenants->numero_parent}}" required>
          </div> 
        </div>
      

        <input type="submit" value="Valider" >
        {{-- <p class="p">Merci d'apporter des modifications pour cette <br><span>Apprenant.</span> </p> --}}

    </form>
    

