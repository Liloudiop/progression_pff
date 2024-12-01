
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">



    @extends('Formateurs.profil')

    <style>
        /* Styles pour l'impression */
        @media print {
            .no-print  {
                display: none;
            }
           
        }
        </style>
    @section('conteneur')
    <h2 class="no-print" >Voici la liste des supports de cours</h2>


<div class="container">

    <ul>
        
        <li  class="no-print" ><a  href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a  href="{{route('support.create')}}">Ajouter cours</a></li>
        <li  class="no-print"  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form  class="no-print"  action="{{route('support.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom </th>
        <th>Fichier</th>
        <th>Filiere</th>
        <th>date</th>
        <th class="no-print" colspan="2">Action</th>
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

            


            <td class="no-print" ><a href="support/edit/{{($supports->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form class="no-print"  action="/support/delete/{{($supports->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print" title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer cette support')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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


@endsection


<script>
    function imprimerPage() {
        window.print();
    }
</script>
