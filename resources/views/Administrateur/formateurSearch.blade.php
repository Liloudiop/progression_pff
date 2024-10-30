
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Formateurs</h2>
    <ul>
        
        <li ><a href="{{route('formateursNew.lister')}}" class="lien_site">Retourner sur le site</a></li>
        {{-- <li><a href="{{route('formateursNew.create')}}">Ajouter un Formateur</a></li> --}}
        <form action="{{route('formateursNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une formateur" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        {{-- <th>Date Naissance</th>
        <th>Lieu Naissance</th> --}}
        <th>Email</th>
        <th>Numero</th>
        <th>Specialite</th>
        {{-- <th>Cni</th>
        <th>Banque</th> --}}
        {{-- <th>Rib</th> --}}
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @if($formateurs->count()>0)

        @foreach ($formateurs as $formateurs)
        <tr>
            <td>{{ $formateurs->nom_complet }}</td>
            {{-- <td>{{ $formateurs->date_naissance }}</td>
            <td>{{ $formateurs->lieu_naissance }}</td> --}}
            <td>{{ $formateurs->email }}</td>
            <td>{{ $formateurs->telephone }}</td>
            <td>{{ $formateurs->specialite }}</td>
            {{-- <td>{{ $formateurs->cni }}</td>
            <td>{{ $formateurs->nom_banque }}</td> --}}
            {{-- <td>{{ $formateurs->rib }}</td> --}}


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




