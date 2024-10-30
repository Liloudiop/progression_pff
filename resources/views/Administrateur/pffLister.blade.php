
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Projet de fin d'etudes</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('pffNew.create')}}">Ajouter un Archive Pff</a></li>

        <form action="{{route('pffNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher un projet" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Acteur</th>
        <th>Nom Theme</th>
        <th>Document</th>
        <th>Promotion</th>
        <th>Filiere</th>

        <th colspan="2">Action</th>
    </thead>
    <tbody>
        @if($pff->count()>0)

        @foreach ($pff as $pff)
        <tr>
            <td>{{ $pff->nom_acteur }}</td>
            <td>{{ $pff->nom_theme }}</td>
            <td>{{ $pff->files }}</td>
            <td>{{ $pff->annee_name}}</td>
            <td>{{ $pff->filiere_name }}</td>


            <td><a href="pffNew/edit/{{($pff->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="/pffNew/delete/{{($pff->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le pff')">Supprimer</button></td>
            </form>
            

            @endforeach
        @else
            <td></td>
            <td></td>
            <td class="post">Aucun post en base de donnee</td>
        @endif
        </tr>
    </tbody>
</table>



<img src="" alt="">