
@extends('Apprenants.layoutApprenant')

    @section('conteneur')

    
    <h2>Voici la liste des Projet de fin d'etudes</h2>
    
    
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
                <td>{{ $pff->files }}</td>
                <td>{{ $pff->annee_name}}</td>

                <td>{{ $pff->filiere_name }}</td>
                
                {{-- @foreach ($fichier as $fichier)
                <a href="{{ route('telecharger', ['id' => $fichier->id]) }}">Télécharger {{ $fichier->files }}</a>
                @endforeach --}}
                <td><a href="{{ $pff->files }}" download="telecharger"><button class="telecharger" style="cursor: pointer" title="telecharger"><img width="20px" src="/icone/download.svg" alt="telecharger"></button></a></td>
                
                
                
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