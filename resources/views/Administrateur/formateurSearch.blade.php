
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


    <title  class="no-print"> Systeme de Gestion Scolaire</title>

    @extends('layout')

    @section('content')

        <div class="container">

    <h2 class="no-print" >Voici la resultat du recherche</h2>
    <ul>
        
        <li class="no-print" ><a href="{{route('formateursNew.lister')}}" class="lien_site">Retourner sur la liste</a></li>
        <li class="no-print"><a href="{{route('formateursNew.create')}}">Ajouter un Formateur</a></li>
        <li class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>
        <form class="no-print" action="{{route('formateursNew.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une formateur">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Specialite</th>
      
        <th  class="no-print" colspan="3">Action</th>
    </thead>
    <tbody>
        @if($formateurs->count()>0)

        @foreach ($formateurs as $formateurs)
        <tr>
            <td>{{ $formateurs->nom_complet }}</td>
            
            <td>{{ $formateurs->email }}</td>
            <td>{{ $formateurs->telephone }}</td>
            <td>{{ $formateurs->specialite }}</td>
           


            <td class="no-print"><a href="/formateurNew/show/{{($formateurs->id)}}" title="voir plus"><img width="20px" src="/icone/list.svg" alt="voir plus"></a></td>
            <td class="no-print"><a href="/formateursNew_profile/{{($formateurs->id)}}" title="voir profile"><img width="20px" src="/icone/eyes1.svg" alt="voir profile"></a></td>

            <form action="/formateurNew/delete/{{($formateurs->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print"title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le formateur')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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
