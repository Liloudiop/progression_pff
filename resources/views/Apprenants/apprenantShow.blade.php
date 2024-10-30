
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Apprenants</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('apprenant.create')}}">Ajouter un Apprenant</a></li>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Date Naissance</th>
        <th>Etat</th>
        <th>Nationalite</th>
        <th>Numero</th>
        <th>Filiere</th>
        <th colspan="4">Action</th>
    </thead>
    <tbody>
        @if($apprenants->count()>0)

        @foreach ($apprenants as $apprenants)
        <tr>
            <td>{{ $apprenants->nom_complet }}</td>
            <td>{{ $apprenants->date_naissance }}</td>
            <td>{{ $apprenants->etat }}</td>
            <td>{{ $apprenants->numero1 }}</td>
            <td>{{ $apprenants->Filiere }}</td>
            <td>{{ $apprenants->lieu_naissance }}</td>
            <td>{{ $apprenants->email }}</td>
            <td>{{ $apprenants->cni }}</td>
            <td>{{ $apprenants->adresse_domicile }}</td>
            <td>{{ $apprenants->nom_tuteur }}</td>
            <td>{{ $apprenants->region_origine }}</td>
            <td>{{ $apprenants->ville_origine }}</td>
            <td>{{ $apprenants->nom_parent }}</td>
            <td>{{ $apprenants->numero_parent }}</td>
            <td>{{ $apprenants->filiere_name }}</td>

            <td><a href="/apprenant/show/{{($apprenants->id)}}"><button class="voir plus">Voir plus</button></a></td>
            <td><a href="/apprenant/edit/{{($apprenants->id)}}"><button class="modifier">Modifier</button></a></td>
            {{-- <td><a href="/apprenantImg.image/{{($apprenants->id)}}"><button class="modifier">PP</button></a></td> --}}
            <td><a href="/apprenant.profile/{{($apprenants->id)}}"><button class="modifier">Voir profile</button></a></td>



            <form action="/apprenant/delete/{{($apprenants->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer l\'apprenant')">Supprimer</button></td>
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




