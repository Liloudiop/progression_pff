
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">
@extends('Formateurs.profil')

    @section('conteneur')
    <h2 >Page Formateur Note</h2>

    {{-- <h2>Voici la liste  de {{$filiere->name}}</h2> --}}



    <div class="container">


    <ul >
        

        <li  class="no-print" ><a href="{{route('notes.liste')}}" class="lien_site">Ajouter note</a></li>

        <form  class="no-print"  action="{{route('formateurNew.searchNote')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une classe" value="{{isset($search) ? $search : ''}}">
           
          
        
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

      

    </ul>

</div>
    
    
    <table  style="margin-top: -80px; width:100%"   >
        <thead>
            <th>Filiere</th>
            
            <th>Action</th>
        </thead>
        <tbody>
            @if($filiere->count()>0)
    
            @foreach ($filiere as $filieres)
            <tr>
                <td>{{ $filieres->name }}</td>
               
    
    
                <td><a href="/formateurNew.noteApprenant/{{($filieres->name)}}"><button class="voir plus">Voir apprenants</button></a></td>
               
                @endforeach
    
                @else
                <td class="post">Aucun post en base de donnee</td>
                <td></td>
                    <td></td>
                @endif
            </tr>
        </tbody>
    </table>

    @endsection