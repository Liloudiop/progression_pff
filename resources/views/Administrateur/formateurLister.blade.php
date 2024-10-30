
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Formateurs</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('formateursNew.create')}}">Ajouter un Formateur</a></li>
        <form action="{{route('formateursNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une formateur">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Specialite</th>
      
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @if($formateurs->count()>0)

        @foreach ($formateurs as $formateurs)
        <tr>
            <td>{{ $formateurs->nom_complet }}</td>
            
            <td>{{ $formateurs->email }}</td>
            <td>{{ $formateurs->telephone }}</td>
            <td>{{ $formateurs->specialite }}</td>
           


            <td><a href="/formateurNew/show/{{($formateurs->id)}}"><button class="voir plus">Voir plus</button></a></td>
            <td><a href="/formateursNew_profile/{{($formateurs->id)}}"><button class="modifier">Voir Profile</button></a></td>

            <form action="/formateurNew/delete/{{($formateurs->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le formateur')">Supprimer</button></td>
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




