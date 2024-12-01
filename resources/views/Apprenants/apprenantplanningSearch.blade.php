<link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">

@extends('Apprenants.layoutApprenant')

    @section('conteneur')
    <h2>Voici la resultat du recherche</h2>

    <div class="container">

        <ul>
            <li ><a  href="{{route('apprenant.planning')}}" class="lien_site">Retourner sur la liste</a></li>
    
            <form  class="no-print" action="{{route('apprenant.planningSearch')}}" method="get">
                <input type="search" name="search" id="search" class="search" placeholder="rechercher un planning..." value="{{isset($search) ? $search : ''}}">
                <button type="submit" id="btnsearch">Rechercher</button>
            </form>
    
        </ul>
    </div>


<table  style="width: 100%">
    <thead>
        <th>Nom planning</th>
        <th>Files</th>
        <th>Promotion</th>
        <th>Departement</th>
        <th>Action</th>
    </thead>
    <tbody>

        @if($plannings->count()>0)

        @foreach ($plannings as $planning)
        <tr>
            <td>{{ $planning->nom }}</td>

            <td title="telecharger"><a href="{{ asset('images/' . $planning->files) }}" download target="_blank">{{ $planning->files }}</a></td>
            <td>{{$planning->annee ? $planning->annee->nom_promotion : 'Non spécifié'}}</td>
            <td>{{ $planning->departement }}</td>


            <td title="telecharger"><a href="{{ asset('images/' . $planning->files) }}" download target="_blank"><img width="20px" src="/icone/download.svg" alt="telecharger"></a></td>

          

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