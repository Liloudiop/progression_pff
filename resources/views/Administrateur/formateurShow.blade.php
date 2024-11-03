
<link rel="stylesheet" href="{{asset('css/listeFormateur.css')}}">
<link rel="shortcut icon" href="/images/logo2.png">


<style>
    /* Styles pour l'impression */
    @media print {
        .no-print  {
            display: none;
        }
       
    }
</style>

<title> Systeme de Gestion Scolaire</title>
<div class="container">

    <h2 class="no-print" >Les details de cette Formateur</h2>
    <ul class="barre_lienformateur">
        <li class="no-print" ><a href="{{route('formateursNew.lister')}}" class="lien_site">Retourner sur le site</a></li>
        <li class="no-print" ><a href="/formateurNew/edit/{{($formateurs->id)}}">Modifier le Formateur</a></li>
        <li class="no-print" ><a href="" onclick="imprimerPage()" >Imprimer</a></li>
    </ul>

</div>

<table style="width: 100%">
    <thead>
        <th>Nom</th>
        <th>Date Naissance</th>
        <th>Email</th>
        <th>Numero</th>
        <th>Specialite</th>
        <th>Cni</th>
        <th>Banque</th>
        <th>Rib</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @if($formateurs->count() > 0)
        <tr>
            <td>{{ $formateurs->nom_complet }}</td>
            <td>{{ \Carbon\Carbon::parse($formateurs->date_naissance)->translatedFormat('d F Y') }}</td>
            <td>{{ $formateurs->email }}</td>
            <td>{{ $formateurs->telephone }}</td>
            <td>{{ $formateurs->specialite }}</td>
            <td>{{ $formateurs->cni }}</td>
            <td>{{ $formateurs->nom_banque }}</td>
            <td>{{ $formateurs->rib }}</td>
            <form class="no-print"  action="/formateurNew/delete/{{($formateurs->id)}}" method="post">
                @csrf
                @method('DELETE')
                <td class="no-print"  title="supprimer"><button class="supprimer" onclick="return confirm('Etes-vous sûr de vouloir supprimer le formateur')"><img class="supprimer" width="20px" src="/icone/delete1.png" alt="supprimer"></button></td>
            </form>
        </tr>
        @else
        <tr>
            <td colspan="9" class="post">Aucun formateur en base de données</td>
        </tr>
        @endif
    </tbody>
</table>

<script>
    function imprimerPage() {
        window.print();
    }
</script>