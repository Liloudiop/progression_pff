
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

@extends('Formateurs.profil')

    @section('conteneur')


    <h2>Voici la liste des Documentations</h2>
<div class="container">

    <ul>
        
        <li ><a  href="{{route('documentation.liste')}}" class="lien_site">Retourner sur la liste</a></li>
        <li><a  href="{{route('documentation.create')}}">Ajouter une documentation</a></li>

        <form  action="{{route('documentation.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom </th>
        <th>Lien</th>
        <th>Filiere</th>
        <th>date</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        {{-- {{dd($documentation)}} --}}

        @if($documentation->count()>0)


        @foreach ($documentation as $documentations)
        <tr>
            <td>{{ $documentations->Nom}}</td>
            <td><a href="{{ $documentations->lien }}" target="_blank">{{ $documentations->lien }}</a></td>
            <td>{{ $documentations->filiere_name }}</td>
            <td>{{ \Carbon\Carbon::parse($documentations->created_at)->translatedFormat('d F Y') }} </td>
            


            <td><a href="documentation/edit/{{($documentations->id)}}"><button class="modifier">Modifier</button></a></td>


            <form action="/documentation/delete/{{($documentations->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette documentation')">Supprimer</button></td>
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