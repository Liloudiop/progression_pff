
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Salles</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('sallesNew.create')}}">Ajouter une salle</a></li>
        <form action="salles_search" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une salles" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Salle</th>
        <th>Capacite</th>
        <th>Emplacement</th>
        <th>Filiere</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>
        @if($salles->count()>0)

        @foreach ($salles as $salles)
        
        <tr>
            <td>{{ $salles->nom_salle }}</td>
            <td>{{ $salles->capacite }}</td>
            <td>{{ $salles->emplacement }}</td>
            <td>{{ $salles->filiere_name}}</td>



            <td><a href="sallesNew/edit/{{($salles->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="{{ route ('sallesNew.delete', $salles['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le salle')">Supprimer</button></td>
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




