
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Cours</h2>
    <ul>
        
        <li ><a href="{{route('coursNew.liste')}}" class="lien_site">Retourner sur la liste</a></li>
        <li><a href="{{route('coursNew.create')}}">Ajouter un Cours</a></li>

        <form action="{{route('coursNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher un cours" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Cours</th>
        <th>Module</th>
        <th>Filiere</th>
        <th>Formateur</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>
        @if($cours->count()>0)

        @foreach ($cours as $cours)
        <tr>
            <td>{{ $cours->nom_cours }}</td>
            <td>{{ $cours->module }}</td>
            <td>{{ $cours->filiere ? $cours->filiere->name : 'Non spécifié' }}</td>
            <td>{{ $cours->formateur->nom_complet ?? 'Non spécifié'}}</td>


            <td><a href="coursNew/edit/{{($cours->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="/coursNews/delete/{{($cours->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le cours')">Supprimer</button></td>
            </form>
            

            @endforeach

        @else
            <td></td>
            <td></td>
            <td class="post">Aucun resultat</td>
        @endif
        </tr>
    </tbody>
</table>




