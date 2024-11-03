
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{asset('css/apprenantProfil.css')}}">
        <link rel="stylesheet" href="{{asset('Js/apprenantProfile.js')}}">
        <link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">




 @extends('Apprenants.layoutApprenant')

        @section('conteneur')
{{--        
<div class="container">

    <ul>
        
        <li ><a style="font-size: 12px; padding:12px;" href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a style="font-size: 12px; padding:12px;" href="{{route('support.create')}}">Ajouter une Support</a></li>

        <form  action="{{route('support.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div> --}}

    <h2>Liste des supports de cours</h2>

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
            <td>{{ \Carbon\Carbon::parse($supports->created_at)->translatedFormat('d F Y') }}</td>
            


            <td><a href="#"><button class="telecharger" style="cursor: pointer" title="telecharger"><img width="20px" src="/icone/download.svg" alt="telecharger"></button></a></td>


            
            

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