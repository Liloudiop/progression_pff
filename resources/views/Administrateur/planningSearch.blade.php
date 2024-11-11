
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
<div class="container">

    <h2 class="no-print" >Voici la resultat du recherche </h2>
    <ul>
        
        <li class="no-print"  ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="{{route('planning.create')}}">Ajouter une Planning</a></li>
        <li  class="no-print"  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>

        <form class="no-print" action="{{route('planning.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une planning" value="{{isset($search) ? $search : ''}}">
            <button  class="no-print" type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom planning</th>
        <th>Files</th>
        <th>Promotion</th>
        <th>Departement</th>
        <th  class="no-print" colspan="2">Action</th>
    </thead>
    <tbody>

        @if($plannings->count()>0)

        @foreach ($plannings as $planning)
        <tr>
            <td>{{ $planning->nom }}</td>
            <td>{{ $planning->files }}</td>
            <td>{{ $planning->annee ? $planning->annee->nom_promotion : 'Non spécifié' }}</td>
            <td>{{ $planning->departement }}</td>


            <td class="no-print" ><a href="/planning/edit/{{($planning->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>

            <form  class="no-print" action="/planning/delete/{{($planning->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print" title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette planning')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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



