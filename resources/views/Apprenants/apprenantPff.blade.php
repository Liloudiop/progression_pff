
@extends('Apprenants.layoutApprenant')
<link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">


    @section('conteneur')
    <h2>Voici la liste des Projet de fin d'etudes</h2>
    <div class="container">

        <ul>
    
            <form  class="no-print" action="{{route('apprenant.pffSearch')}}" method="get">
                <input type="search" name="search" id="search" class="search" placeholder="rechercher un pff..." value="{{isset($search) ? $search : ''}}">
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
            <th colspan="1">Action</th>
        </thead>
        <tbody>
            
            
            @if($pff->count()>0)
            
            @foreach ($pff as $pff)
            <tr>
                <td>{{ $pff->nom_acteur }}</td>
                <td>{{ $pff->nom_theme }}</td>

                <td  title="telecharger"><a href="{{ asset('images/' . $pff->files) }}" download target="_blank">{{ $pff->files }}</a></td>
                
                <td>{{ $pff->annee_name}}</td>

                <td>{{ $pff->filiere_name }}</td>
                

                <td title="telecharger"><a href="{{ asset('images/' . $pff->files) }}" download target="_blank"><img width="20px" src="/icone/download.svg" alt="telecharger"></a></td>
                
                
                
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