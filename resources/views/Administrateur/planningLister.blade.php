
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des plannings</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('planning.create')}}">Ajouter une Année</a></li>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom planning</th>
        <th>Files</th>
        <th>Promotion</th>
        <th>Departement</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        @if($plannings->count()>0)

        @foreach ($plannings as $planning)
        <tr>
            <td>{{ $planning->nom }}</td>
            <td>{{ $planning->files }}</td>
            <td>{{ $planning->nom_promotion }}</td>
            <td>{{ $planning->departement }}</td>


            <td><a href="/planning/edit/{{($planning->id)}}"><button class="modifier">Modifier</button></a></td>

            <form action="/planning/delete/{{($planning->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette planning')">Supprimer</button></td>
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




