@extends('Apprenants.layoutApprenant')

    @section('conteneur')
        <h2>Pages Documentation</h2>
    
        <table  style="width: 100%">
            <thead>
                <th>Nom </th>
                <th>Lien</th>
                <th>date</th>
            </thead>
            <tbody>
        
                {{-- {{dd($documentation)}} --}}
        
                @if($documentation->count()>0)
        
        
                @foreach ($documentation as $documentations)
                <tr>
                    <td>{{ $documentations->Nom}}</td>

                    <td><a href="{{ $documentations->lien }}" target="_blank">{{ $documentations->lien }}</a></td>

                    <td>{{ \Carbon\Carbon::parse($documentations->created_at)->translatedFormat('d F Y') }}</td>

                    
        
        
        
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