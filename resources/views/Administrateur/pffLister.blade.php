
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

    <title class="no-print"> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2 class="no-print" >Voici la liste des Projet de fin d'etudes</h2>
    <ul>
        
        <li  class="no-print" ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="{{route('pffNew.create')}}">Ajouter un Archive Pff</a></li>
        <li  class="no-print"  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form  class="no-print" action="{{route('pffNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher un projet" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Acteur</th>
        <th>Nom Theme</th>
        <th>Document</th>
        <th>Promotion</th>
        <th>Filiere</th>

        <th class="no-print"  colspan="2">Action</th>
    </thead>
    <tbody>
        @if($pff->count()>0)

        @foreach ($pff as $pff)
        <tr>
            <td>{{ $pff->nom_acteur }}</td>
            <td>{{ $pff->nom_theme }}</td>
            <td>{{ $pff->files }}</td>
            <td>{{ $pff->annee_name}}</td>
            <td>{{ $pff->filiere_name }}</td>


            <td class="no-print" ><a href="pffNew/edit/{{($pff->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form class="no-print"  action="/pffNew/delete/{{($pff->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print" title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le pff')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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