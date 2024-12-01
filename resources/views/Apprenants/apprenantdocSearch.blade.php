@extends('Apprenants.layoutApprenant')
<link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">


    @section('conteneur')
        <h2>Voici la resultat du recherche</h2>
        <div class="container">

            <ul>
                <li ><a  href="{{route('apprenant.doc')}}" class="lien_site">Retourner sur la liste</a></li>

        
                <form  class="no-print" action="{{route('apprenant.docSearch')}}" method="get">
                    <input type="search" name="search" id="search" class="search" placeholder="rechercher une support..." value="{{isset($search) ? $search : ''}}">
                    <button type="submit" id="btnsearch">Rechercher</button>
                </form>
        
            </ul>
        </div>

    
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