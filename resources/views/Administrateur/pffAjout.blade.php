<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('pffNew.store')}}" method="post">
        @csrf
    <h4>Ajouter Un Archive PFF</h4>
        <hr>

        <label for="nom_acteur">Nom du Acteur</label>
        <input type="text" name="nom_acteur" id="nom_acteur" required> 


        <label for="name">Nom du theme</label>
        <input type="text" name="name" id="name" required>
        
        <label for="image">Document</label>
        <input type="file" name="image" id="image" required> 

        <label for="pff_filiere_id">Filiere</label>
        <select name="pff_filiere_id" >
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

        </select>





        <label for="pff_filiere_id">Promotion</label>
        <select name="pff_annee_id" >
            @foreach ($annee as $annee)
                <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
            @endforeach

        </select>
       
        <input type="submit" value="Valider">
        <p class="p">Merci de remplir tous les champs  pour archivrer <br><span>une theme pff.</span> </p>
    </form>
