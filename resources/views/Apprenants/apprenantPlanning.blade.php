<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">
@extends('Apprenants.layoutApprenant')

    @section('conteneur')
    <h2>Pages Planning</h2>


<table  style="width: 100%">
    <thead>
        <th>Nom planning</th>
        <th>Files</th>
        <th>Promotion</th>
        <th>Departement</th>
        <th>Action</th>
    </thead>
    <tbody>

        @if($plannings->count()>0)

        @foreach ($plannings as $planning)
        <tr>
            <td>{{ $planning->nom }}</td>
            {{-- <td>{{ $planning->files }}</td> --}}
            <td title="telecharger"><a href="{{ asset('images/' . $planning->files) }}" download target="_blank">{{ $planning->files }}</a></td>
            <td>{{ $planning->nom_promotion }}</td>
            <td>{{ $planning->departement }}</td>


            <td title="telecharger"><a href="{{ asset('images/' . $planning->files) }}" download target="_blank"><img width="20px" src="/icone/download.svg" alt="telecharger"></a></td>

          

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