
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">


@extends('Formateurs.profil')

    @section('conteneur')


    <h2>Voici la liste des eleves</h2>

    
    <ul class="searchEleve">
        

        {{-- <li  class="no-print"   class="no-print" class="no-print"><a href="" onclick="imprimerPage()" >Imprimer</a></li> --}}


        {{-- <form  class="no-print"  action="{{route('formateurNew.classeSearch')}}" method="get">
            {{-- <input type="search" name="search" id="search" class="search" placeholder="rechercher " value="{{isset($search) ? $search : ''}}"> 
           

            <select name="search" id="search" class="search">
                <option value="">Liste des classes</option>
                @foreach ($classe as $classes)
                    <option value="{{$classes->name}}" >{{$classes->name}}</option>
                @endforeach
    
           </select>
        
            <button type="submit" id="btnsearch">Rechercher</button>
        </form> --}}

    </ul>
    
    <table  style="width: 100%">
        <thead>
            <th>Nom Complet</th>
            
            <th>Action</th>
        </thead>
        <tbody>
            @if($apprenants->count()>0)
    
            @foreach ($apprenants as $apprenants)
            <tr>
                <td>{{ $apprenants->nom_complet }}</td>
               
    
    
                <td><a href="/apprenant/show/{{($apprenants->id)}}"><button class="voir plus">ajouter note</button></a></td>
               
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