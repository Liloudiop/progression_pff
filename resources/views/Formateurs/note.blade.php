
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">
@extends('Formateurs.profil')

    @section('conteneur')
    <h2 >Page Formateur Note</h2>

    {{-- <h2>Voici la liste  de {{$filiere->name}}</h2> --}}

    <ul class="searchEleve">
        

        {{-- <li  class="no-print"   class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li> --}}


        <form  class="no-print"  action="{{route('formateurNew.searchNote')}}" method="get">
            <input type="search" name="search" id="search" class="search" placeholder="rechercher une classe" value="{{isset($search) ? $search : ''}}">
           
            {{-- <select name="search" id="search" class="search">
                <option value="">Liste des classes</option>
                @foreach ($classe as $classes)
                    <option value="{{$classes->name}}" >{{$classes->name}}</option>
                @endforeach --}}
    
           </select>
        
            <button type="submit" id="btnsearch">Rechercher</button>
        </form>

        {{-- <form  class="no-print"  action="{{route('formateurNew.classeSearch')}}" method="get">
            {{-- <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}"> 
           
            <select name="search" id="search" class="search">
                <option value="">Choisir departement</option>
                @foreach ($classe as $classes)
                    <option value="{{$classes->departement}}" >{{$classes->departement}}</option>
                @endforeach
    
           </select>
        
            <button type="submit" id="btnsearch">Rechercher</button>
        </form> --}}

    </ul>
    
    
    <table  style="width: 100%">
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