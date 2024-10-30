
<link rel="stylesheet" href="{{asset('css/listeFormateur.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Formateurs</h2>
    <ul class="barre_lienformateur">
        
        <li ><a href="{{route('formateursNew.lister')}}" class="lien_site">Retourner sur le site</a></li>
        <li><a href="/formateurNew/edit/{{($formateurs->id)}}">Modifier le Formateur</a></li>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Date Naissance</th>
        {{-- <th>Lieu Naissance</th> --}}
        <th>Email</th>
        <th>Numero</th>
        <th>Specialite</th>
        <th>Cni</th>
        <th>Banque</th>
        <th>Rib</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @if($formateurs->count()>0)
        {{-- {{dd($formateurs)}} --}}


        <tr>

             <td>{{ $formateurs->nom_complet }}</td> 
            <td>{{ \Carbon\Carbon::parse($formateurs->date_naissance)->translatedFormat('d F Y') }}</td>
            <td>{{ $formateurs->email }}</td>
            <td>{{ $formateurs->telephone }}</td>
            <td>{{ $formateurs->specialite }}</td>
            <td>{{ $formateurs->cni }}</td> 
            <td>{{ $formateurs->nom_banque }}</td> 
            <td>{{ $formateurs->rib }}</td>


           

            <form action="/formateurNew/delete/{{($formateurs->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td><button class="supprimer" onclick="return confirm('Etes vous sur de vouloir supprimer le formateur')">Supprimer</button></td>
            </form> 
            


        @else
            <td></td>
            <td></td>
            <td class="post">Aucun post en base de donnee</td>
        @endif
        </tr>
    </tbody>
</table>




