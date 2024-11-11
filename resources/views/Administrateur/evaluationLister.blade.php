
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

    <h2  class="no-print" >Voici la liste des evaluations</h2>
    <ul>
        
        <li  class="no-print" ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="{{route('evaluations.create')}}">Ajouter un Evaluation</a></li>
        <li  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form  class="no-print" action="{{route('evaluations.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une evaluation" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom </th>
        <th>Type</th>
        <th>Filiere</th>
        <th>Semestre</th>
        <th>Promotion</th>
        <th>Date</th>
        <th class="no-print"  colspan="2">Action</th>
    </thead>
    <tbody>


        @if($evaluations->count()>0)

        {{-- {{dd($cours)}} --}}

        @foreach ($evaluations as $evaluations)
        <tr>
            <td>{{ $evaluations->nom }}</td>
            <td>{{ $evaluations->type }}</td>
            <td>{{ $evaluations->filiere_name }}</td>
            <td>{{ $evaluations->annee_name}}</td>
            <td>{{ $evaluations->semestre_name}}</td>
            <td>{{ \Carbon\Carbon::parse($evaluations->date)->translatedFormat('d F Y') }}</td>



            <td class="no-print" ><a href="evaluations/edit/{{($evaluations->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>


            <form action="/evaluations/delete/{{($evaluations->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer l\'evaluation')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
            </form>
            

            @endforeach

        @else
            <td></td>
            <td></td>
            <td class="post">Aucun evaluation en base de donnee</td>
        @endif
        </tr>
    </tbody>
</table>



<script>
    function imprimerPage() {
        window.print();
    }
</script>

