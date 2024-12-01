
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

    <h2 class="no-print" >Voici la liste des Salles</h2>
    <ul>
        
        <li  class="no-print" ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="{{route('sallesNew.create')}}">Ajouter une salle</a></li>
        <li  class="no-print"  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>

        <form class="no-print"  action="salles_search" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une salles" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom Salle</th>
        <th>Capacite</th>
        <th>Emplacement</th>
        <th>Filiere</th>
        <th  class="no-print" colspan="2">Action</th>
    </thead>
    <tbody>
        @if($salles->count()>0)

        @foreach ($salles as $salles)
        
        <tr>
            <td>{{ $salles->nom_salle }}</td>
            <td>{{ $salles->capacite }}</td>
            <td>{{ $salles->emplacement }}</td>
            <td>{{ $salles->filiere_name}}</td>



            <td class="no-print"><a href="sallesNew/edit/{{($salles->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form action="{{ route ('sallesNew.delete', $salles['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le salle')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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



