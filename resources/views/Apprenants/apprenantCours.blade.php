
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{asset('css/apprenantPff.css')}}">





 @extends('Apprenants.layoutApprenant')

 @section('conteneur')
 <h2>Liste des supports de cours</h2>
        <div class="container">

            <ul>
        
                <form  class="no-print" action="{{route('apprenant.coursSearch')}}" method="get">
                    <input type="search" name="search" id="search" class="search" placeholder="rechercher une support..." value="{{isset($search) ? $search : ''}}">
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
        <th colspan="2">Action</th>
    </thead>
    <tbody>

        {{-- {{dd($documentation)}} --}}

        @if($support->count()>0)


        @foreach ($support as $supports)
        <tr>
            <td>{{ $supports->nom_support}}</td>
            {{-- <td>{{ $supports->files }}</td> --}}
            <td><a href="{{ asset('images/' . $supports->files) }}" download target="_blank">{{ $supports->files }}</a></td>

            <td>{{ $supports->filiere_name }}</td>
            <td>{{ \Carbon\Carbon::parse($supports->created_at)->translatedFormat('d F Y') }}</td>
            


            <td title="telecharger"><a href="{{ asset('images/' . $supports->files) }}" download target="_blank"><img width="20px" src="/icone/download.svg" alt="telecharger"></a></td>


            
            

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