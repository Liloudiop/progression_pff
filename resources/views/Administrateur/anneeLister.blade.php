
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Années</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('annees.create')}}">Ajouter une Année</a></li>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Promotion</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        @if($annee->count()>0)

        @foreach ($annee as $annee)
        <tr>
            <td>{{ $annee->nom_promotion }}</td>
            {{-- <td>{{ $annee->date_debut }}</td> --}}
            <td>{{ \Carbon\Carbon::parse($annee->date_debut)->translatedFormat('d F Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($annee->date_fin)->translatedFormat('d F Y') }}</td>



            <td><a href="/annee/edit/{{($annee->id)}}"><button class="modifier">Modifier</button></a></td>

            <form action="/annee/delete/{{($annee->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer l\'annee')">Supprimer</button></td>
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



{{-- 
@extends('Formateurs.profil')

    @section('conteneur')
         <h2>Page Formateur Community</h2>
    @endsection --}}