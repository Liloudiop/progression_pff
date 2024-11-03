
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

    <title  class="no-print" > Systeme de Gestion Scolaire</title>
<div class="container">

    <h2  class="no-print" >Voici la liste des Cours</h2>
    <ul>
        
        <li  class="no-print" ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="{{route('coursNew.create')}}">Ajouter un Cours</a></li>
        <li  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form  class="no-print" action="{{route('coursNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher un cours" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Cours</th>
        <th>Module</th>
        <th>Filiere</th>
        <th>Formateur</th>
        <th class="no-print"  colspan="2">Action</th>
    </thead>
    <tbody>


        @if($cours->count()>0)

        {{-- {{dd($cours)}} --}}

        @foreach ($cours as $cours)
        <tr>
            <td>{{ $cours->nom_cours }}</td>
            <td>{{ $cours->module }}</td>
            <td>{{ $cours->filiere_name }}</td>
            <td>{{ $cours->nom_formateur}}</td>


            <td class="no-print" ><a href="coursNew/edit/{{($cours->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form action="/coursNews/delete/{{($cours->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le cours')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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

