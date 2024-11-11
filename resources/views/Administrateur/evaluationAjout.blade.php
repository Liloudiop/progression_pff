<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>


    <form action="{{route('evaluations.store')}}" method="post">
        @csrf
    <h4>Ajouter Evaluation</h4>
        <hr>

        <label for="nom">Nom Evaluation</label>
        <input type="text" name="nom" id="nom" required> 

        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="Exercice">Exercice</option>
            <option value="Devoir">Devoir</option>
            <option value="Examen">Examen</option>
            <option value="PFF">PFF</option>

        </select>

        <label for="date">Date</label>
        <input type="date" name="date" id="date" required>


        <label for="filiere_id">Filiere</label>
        <select name="filiere_id" >
            @foreach ($filieres as $filiere)
                <option value="{{$filiere->id}}" >{{$filiere->name}}</option>
            @endforeach

        </select>

        <label for="annee_id">Promotion</label>
        <select name="annee_id" >
            @foreach ($annees as $annee)
                <option value="{{$annee->id}}" >{{$annee->nom_promotion}}</option>
            @endforeach

        </select>


        <label for="semestre_id">Semestre</label>
        <select name="semestre_id" >
            @foreach ($semestres as $semestres)
                <option value="{{$semestres->id}}" >{{$semestres->nom_semestre}}</option>
            @endforeach

        </select>

        

        
      
       
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <span>une evaluation.</span> </p>
    </form>
