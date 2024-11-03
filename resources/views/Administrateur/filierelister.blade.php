
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

    <title class="no-print"  > Systeme de Gestion Scolaire</title>
<div class="container">

    <h2 class="no-print"  >Voici la liste des Filieres</h2>
    <ul>
        
        <li  class="no-print"><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print"><a href="{{route('filieres.create')}}">Ajouter un filiere</a></li>
        <li class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form class="no-print" action="{{route('filieres.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une filiere" value="{{isset($search) ? $search : ''}}">
            <button  class="no-print" type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Description</th>
        <th>Departement</th>
        <th  class="no-print" colspan="2">Action</th>
    </thead>
    <tbody>

        @if($filieres->count()>0)

        @foreach ($filieres as $filieres)
        <tr>
            <td>{{ $filieres->name }}</td>
            <td>{{ $filieres->description }}</td>
            <td>{{ $filieres->departement }}</td>
            <td class="no-print"><a href="/filiere/edit/{{($filieres->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form action="/filiere/delete/{{($filieres->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print" title="supprimer"><button style="background-color: none; border: none" class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le filiere')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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




