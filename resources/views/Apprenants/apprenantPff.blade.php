
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
                {{-- <td>{{ $pff->files }}</td> --}}
                <td  title="telecharger"><a href="{{ asset('images/' . $pff->files) }}" download target="_blank">{{ $pff->files }}</a></td>
                
                <td>{{ $pff->annee_name}}</td>

                <td>{{ $pff->filiere_name }}</td>
                
                {{-- @foreach ($fichier as $fichier)
                <a href="{{ route('telecharger', ['id' => $fichier->id]) }}">Télécharger {{ $fichier->files }}</a>
                @endforeach --}}
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