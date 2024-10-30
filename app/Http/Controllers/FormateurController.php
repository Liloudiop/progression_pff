<?php

namespace App\Http\Controllers;
use App\Models\Formateur;
use App\Models\Filiere;
use App\Models\Apprenant;
use App\Models\Planning;
use App\Models\Annee;
use Illuminate\Http\Request;

class FormateurController extends Controller
{
    public function index()
  {
      $formateurs = Formateur::all();

      // dd($formateurs);

      return view('Administrateur.formateurLister',compact('formateurs'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
      return view('Administrateur.formateurAjout');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
      if ($request) {
          # code...
          $formateurs = new Formateur();
          
          $formateurs->nom_complet = $request->input('nom_complet');
          $formateurs->date_naissance = $request->input('date_naissance');
          $formateurs->lieu_naissance = $request->input('lieu_naissance');
          $formateurs->email = $request->input('email');
          $formateurs->specialite = $request->input('specialite');
          $formateurs->telephone = $request->input('numero');
          $formateurs->cni = $request->input('cni');
          $formateurs->nom_banque = $request->input('banque');
          $formateurs->rib = $request->input('rib');
          
          // dd($formateurs);
          $formateurs ->save();
          return redirect("/formateursNew.liste");
      }
  }






   // Function pour modifier

  public function edit($id)
  {
      $formateur = Formateur::find($id);
      return view('Administrateur.formateurModifier',['formateur' => $formateur]);
  }

  

  public function editTraitement(Request $request) {


      $formateurs = Formateur::find($request->id);

      $formateurs->nom_complet = $request->input('nom_complet');
      $formateurs->date_naissance = $request->input('date_naissance');
      $formateurs->lieu_naissance = $request->input('lieu_naissance');
      $formateurs->email = $request->input('email');
      $formateurs->specialite = $request->input('specialite');
      $formateurs->telephone = $request->input('numero');
      $formateurs->cni = $request->input('cni');
      $formateurs->nom_banque = $request->input('banque');
      $formateurs->rib = $request->input('rib');

          
          $formateurs ->update();
          return redirect("formateursNew.liste");
      }

      public function delete($id) {
          $formateurs = Formateur::find($id);
  
          if ($formateurs) {
              $formateurs->delete();
          }
          return redirect("formateursNew.liste");
  
      }

      public function profile($id)
  {
      $formateur = Formateur::find($id);
      return view('Administrateur.formateurProfile',compact('formateur'));
  }


  public function show($id){
    $formateurs = Formateur::find($id);

    return view('Administrateur.formateurShow',compact('formateurs'));
  }


  // Partie Profil Formateur

  public function profilNew($id)
    {
   
        // dd("Page profil");
        $formateur = Formateur::find($id);
     
        return view('Formateurs.profil',compact('formateur'));
    }


  public function cours()
    {

        return view('Formateurs.cours');
    }
    
    public function planning()
    {
        $plannings = Planning::select('plannings.*', 'plannings.nom as nom', 'annees.nom_promotion as nom_promotion')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->get();
        return view('Formateurs.planning', compact('plannings'));
    }

    public function documentation()
    {

        return view('Formateurs.documentation');
    }

    public function note()
    {

        return view('Formateurs.note');
    }

    public function statistique()
    {

        return view('Formateurs.statistique');
    }

    
    public function cahierDeCharge()
    {

        return view('Formateurs.cahierDeCharge');
    }

    public function settings()
    {

        return view('Formateurs.settings');
    }

    public function community()
    {

        return view('Formateurs.community');
    }
    
    public function search(Request $request) {
        $search = $request->search;

        $formateurs = Formateur::where(function($query) use ($search){
            $query->where('nom_complet', 'like' ,"%$search%")
            ->orwhere('specialite', 'like' ,"%$search%")
            ->orwhere('nom_banque', 'like' ,"%$search%");
        })->get();

        // dd($formateurs);
        return view('Administrateur.formateurSearch', compact('formateurs', 'search'));
    }



    public function listEleve()
    {
        // Rechercher la filière "DFE"
        $filiere = Filiere::where('name', 'DFE')->first();
        
        // Si la filière est trouvée, récupérer tous les élèves de cette filière
        if ($filiere) {
            $apprenant = Apprenant::where('filieres_id', $filiere->id)->get();
        } else {
            // Si la filière n'est pas trouvée, retourner un tableau vide
            $apprenant = [];
        }

        // Retourner la vue avec les élèves récupérés
        return view('Formateurs.eleveLister', compact('apprenant', 'filiere'));
    }


//     public function listEleve(){
//     // Récupérer toutes les filières
//     $filieres = Filiere::all();

//     // Initialiser un tableau pour stocker les apprenants par filière
//     $apprenant = [];

//     // Parcourir chaque filière et récupérer les apprenants associés
//     foreach ($filieres as $filiere) {
//         // Récupérer les apprenants pour chaque filière
//         $apprenant[$filiere->name] = Apprenant::where('filieres_id', $filiere->id)->get();
//     }

//     // dd($apprenant);
//     // Retourner la vue avec les filières et les apprenants par filière
//     return view('Formateurs.eleveLister', compact('apprenant', 'filieres'));
// }


   
}

