
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

@extends('Formateurs.profil')

    @section('conteneur')


<div class="container">

    <ul>
        
        <li ><a style="font-size: 12px; padding:12px;" href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a style="font-size: 12px; padding:12px;" href="{{route('support.create')}}">Ajouter une Support</a></li>

        <form  action="{{route('support.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom </th>
        <th>Fichier</th>
        <th>Filiere</th>
        <th>date</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        {{-- {{dd($documentation)}} --}}

        @if($support->count()>0)


        @foreach ($support as $supports)
        <tr>
            <td>{{ $supports->nom_support}}</td>
            <td>{{ $supports->files }}</td>
            <td>{{ $supports->filiere_name }}</td>
            <td>{{ $supports->created_at }}</td>
            


            <td><a href="support/edit/{{($supports->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="/support/delete/{{($supports->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette support')">Supprimer</button></td>
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


@endsection