
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

    <title> Systeme de Gestion Scolaire</title>


    @extends('layout')

    @section('content')

            <div class="container">

    <h2 class="no-print" >Voici la resultat du recherche</h2>
    <ul>
        
        <li  class="no-print" ><a href="{{route('semestres.liste')}}" class="lien_site">Retourner sur la liste</a></li>
        <li class="no-print" ><a href="{{route('semestres.create')}}">Ajouter une Semestre</a></li>
        <li class="no-print"   class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>

        <form class="no-print" action="{{route('semestres.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une filiere" value="{{isset($search) ? $search : ''}}">
            <button  class="no-print" type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Promotion</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th class="no-print"  colspan="2">Action</th>
    </thead>
    <tbody>

        @if($semestre->count()>0)

        @foreach ($semestre as $semestres)
        <tr>
            <td>{{ $semestres->nom_semestre }}</td>
            <td>{{ $semestres->annee ? $semestres->annee->nom_promotion : 'Non spécifié' }}</td>
            <td>{{ \Carbon\Carbon::parse($semestres->date_debut)->translatedFormat('d F Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($semestres->date_fin)->translatedFormat('d F Y') }}</td>



            <td class="no-print" ><a href="/semestres/edit/{{($semestres->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>

            <form class="no-print"  action="/semestres/delete/{{($semestres->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette semestre')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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
