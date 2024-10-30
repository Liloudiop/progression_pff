
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Filieres</h2>
    <ul>
        
        <li ><a href="{{route('filiere.liste')}}" class="lien_site">Retourner sur la liste</a></li>
        <li><a href="{{route('filiere.create')}}">Ajouter un filiere</a></li>

        <form action="{{route('filieres.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une filiere" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Description</th>
        <th>Departement</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        @if($filieres->count()>0)

        @foreach ($filieres as $filieres)
        <tr>
            <td>{{ $filieres->name }}</td>
            <td>{{ $filieres->description }}</td>
            <td>{{ $filieres->departement }}</td>
            <td><a href="/filiere/edit/{{($filieres->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="/filiere/delete/{{($filieres->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le filiere')">Supprimer</button></td>
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




