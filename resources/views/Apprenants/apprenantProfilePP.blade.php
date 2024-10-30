<link rel="stylesheet" href="{{asset('css/create.css')}}">
<link rel="stylesheet" href="{{asset('Js/form.css')}}">


    <form action="{{route('apprenant.profileStore')}}" method="post">
        @csrf
    <h4>Changer de Profile</h4>
        <hr>

        <label for="image">image</label>
        <input type="file" name="image" id="image" required> 

        <select name="apprenant_id" >
            {{-- <option value="">--filière--</option> --}}
            @foreach ($apprenant as $apprenants)
                <option value="{{$apprenants->id}}" >{{$apprenants->nom_complet}}</option>
            @endforeach

        </select>

       
        <input type="submit" value="Valider">

        {{-- <p class="p">Vous avez deja un compte ? <a href="/pages/login">se connecter</a></p> --}}
        <p class="p">Merci de remplir tous les champs  pour ajouter <br><span>un image Apprenant.</span> </p>
    </form>
