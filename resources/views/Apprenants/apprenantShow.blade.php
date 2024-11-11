
<link rel="stylesheet" href="{{asset('css/liste.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">

    <title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2>Voici la liste des Apprenants</h2>
    <ul>
        
        <li ><a href="/" class="lien_site">Retourner sur le site</a></li>
        <li><a href="{{route('apprenant.create')}}">Ajouter un Apprenant</a></li>
    </ul>
</div>

<table  style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Date Naissance</th>
        <th>Etat</th>
        <th>Numero</th>
         <th>Filiere</th> 
        
    </thead>
    <tbody>
        @if($apprenant->count()>0)

        @foreach ($apprenant as $apprenants)
        <tr>
            <td>{{ $apprenants->nom_complet }}</td>
            <td>{{ \Carbon\Carbon::parse($apprenants->date_naissance)->translatedFormat('d F Y') }}</td>
            <td>{{ $apprenants->etat }}</td>
            <td>{{ $apprenants->email }}</td>
            <td>{{ $apprenants->numero1 }}</td>


            <td class="no-print"><a href="/apprenant/show/{{($apprenants->id)}}" title="voir plus"><img width="20px" src="/icone/list.svg" alt="voir infos"></a></td>
            <td class="no-print"><a href="/apprenant/edit/{{($apprenants->id)}}" title="modifier"><img width="20px" src="/icone/edit.svg" alt="modifier"></a></td>
            <td class="no-print"><a href="/apprenant.profile/{{($apprenants->id)}}" title="voir profil"><img width="20px" src="/icone/eyes1.svg" alt="voir plus"></a></td>
            
            
            {{-- <td><a href="/apprenantImg.image/{{($apprenants->id)}}"><button class="modifier">PP</button></a></td> --}}

            <form action="/apprenant/delete/{{($apprenants->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td  class="no-print" style="cursor: pointer;" title="supprimer"><img width="20px" src="/icone/delete1.png" alt="supprimer"  onclick="return confirm('Etes vous sur de vouloir supprimer l\'apprenant')"></td>
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


        
