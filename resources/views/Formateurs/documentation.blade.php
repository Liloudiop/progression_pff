
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">
<style>
    /* Styles pour l'impression */
    @media print {
        .no-print  {
            display: none;
        }
       
    }
    </style>

@extends('Formateurs.profil')

    @section('conteneur')


    <h2 class="no-print"   >Voici la liste des Documentations</h2>
<div class="container">

    <ul>
        
        <li  class="no-print"  ><a style="font-size: 12px; padding:12px;" href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print"   ><a style="font-size: 12px; padding:12px;" href="{{route('documentation.create')}}">Ajouter une documentation</a></li>
        <li  class="no-print"   class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form  class="no-print"  action="{{route('documentation.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom </th>
        <th>Lien</th>
        <th>date</th>
        <th  class="no-print"  colspan="2">Action</th>
    </thead>
    <tbody>

        {{-- {{dd($documentation)}} --}}

        @if($documentation->count()>0)


        @foreach ($documentation as $documentations)
        <tr>
            <td>{{ $documentations->Nom}}</td>
            <td>{{ $documentations->lien }}</td>
            <td>{{ \Carbon\Carbon::parse($documentations->created_at)->translatedFormat('d F Y') }}</td>
            
            


            <td class="no-print"   ><a href="documentation/edit/{{($documentations->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form action="/documentation/delete/{{($documentations->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette documentation')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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




<script>
    function imprimerPage() {
        window.print();
    }
</script>

@endsection
