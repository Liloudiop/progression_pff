
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

    <div class="container">

    <h2 class="no-print" >Voici la liste des notes</h2>
    <ul>
        

        <li class="no-print" ><a href="{{route('notes.create')}}">Ajouter une Note</a></li>
        <li  class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li>


        <form   class="no-print" action="{{route('notes.search')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une note" value="{{isset($search) ? $search : ''}}">
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

    </ul>

    </div>

    <table  style="width: 100%">
        <thead>
            <th>Nom </th>
            <th>Evaluation</th>
            <th>Moyenne</th>
            <th>Date</th>
            <th class="no-print"  colspan="2">Action</th>
        </thead>
        <tbody>
    
    
            @if($note->count()>0)
    
            {{-- {{dd($cours)}} --}}
    
            @foreach ($note as $notes)
            <tr>
                <td>{{ $notes->apprenant_nom }}</td>
                <td>{{ $notes->evaluation_nom }}</td>
                <td>{{ $notes->note }}</td>
            <td>{{ \Carbon\Carbon::parse($notes->date)->translatedFormat('d F Y') }}</td>


               
    
    
    
                <td class="no-print" ><a href="notes/edit/{{($notes->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>
    
    
                <form action="/notes/delete/{{($notes->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer ce note')"><img class="supprimer"  width="20px" src="/icone/delete1.png" alt="supprimer" ></button></td>
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



    @endsection



<script>
    function imprimerPage() {
        window.print();
    }
</script>


