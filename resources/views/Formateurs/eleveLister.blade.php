
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">


@extends('Formateurs.profil')

    @section('conteneur')


    <h2>Voici la liste de rappel</h2>

    
    
    <table  style="width: 100%">
        <thead>
            <th>Nom Complet</th>
            
            <th>Action</th>
        </thead>
        <tbody>
            @if($apprenant->count()>0)
    
            @foreach ($apprenant as $apprenants)
            <tr>
                <td>{{ $apprenants->nom_complet }}</td>
               
    
    
                <td><a href="/apprenant/show/{{($apprenants->id)}}"><button class="voir plus">Absent</button></a></td>
               
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