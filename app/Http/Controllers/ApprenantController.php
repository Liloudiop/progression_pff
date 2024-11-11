<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Filiere;
use App\Models\Apprenant;
use App\Models\Pff;
use App\Models\PffNew;
use App\Models\Cours;
use App\Models\ProfileApprenant;
use App\Models\Documentation;
use App\Models\Support;
use App\Models\Annee;
use App\Models\Planning;



class ApprenantController extends Controller
{

    public function index()
    {
        // $apprenant = Apprenant::all();
        // $apprenant = Apprenant::with('filiere')->get();
        // dd($apprenant);

        $apprenant = Apprenant::select('apprenants.*', 'apprenants.nom_complet AS nom_complet', 'filieres.name as filiere_name')
          ->join('filieres', 'apprenants.filieres_id', '=', 'filieres.id')
          ->get();

        //   dd($apprenant);
        return view('Apprenants.apprenantLister',compact('apprenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $filieres = Filiere::all();
        return view('Apprenants.apprenantAjout', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $apprenants = new Apprenant();
            
            $apprenants->nom_complet = $request->input('nom_complet');
            $apprenants->date_naissance = $request->input('date_naissance');
            $apprenants->etat = $request->input('etat');
            $apprenants->lieu_naissance = $request->input('lieu_naissance');
            $apprenants->email = $request->input('email');
            $apprenants->numero1 = $request->input('numero');
            $apprenants->cni = $request->input('cni');
            $apprenants->adresse_domicile = $request->input('adresse_domicile');
            $apprenants->nom_tuteur = $request->input('nom_tuteur');
            $apprenants->region_origine = $request->input('region_origine');
            $apprenants->ville_origine = $request->input('ville_origine');
            $apprenants->filieres_id = $request->input('cours_filiere_id');
            $apprenants->nom_parent = $request->input('nom_parent');
            $apprenants->numero_parent = $request->input('numero_parent');

            
            $apprenants ->save();
            return redirect("/apprenant.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $filieres = Filiere::all();
        $apprenants = Apprenant::find($id);
        return view('Apprenants.apprenantModifier',compact('filieres','apprenants'));
    }


    // function pour show

    public function show($id){
       
        $apprenant = Apprenant::with('filiere')->find($id); // Récupère l'apprenant avec sa filière
    
        // Vérifiez si l'apprenant existe
        if (!$apprenant) {
            return redirect()->back()->with('error', 'Apprenant non trouvé');
        }
    
        // dd($apprenant);
        return view('Apprenants.ApprenantShow', compact('apprenant'));
      }
    

    public function editTraitement(Request $request) {


        $apprenants = Apprenant::find($request->id);

            
        $apprenants->nom_complet = $request->input('nom_complet');
        $apprenants->date_naissance = $request->input('date_naissance');
        $apprenants->etat = $request->input('etat');
        $apprenants->lieu_naissance = $request->input('lieu_naissance');
        $apprenants->email = $request->input('email');
        $apprenants->numero1 = $request->input('numero');
        $apprenants->cni = $request->input('cni');
        $apprenants->adresse_domicile = $request->input('adresse_domicile');
        $apprenants->nom_tuteur = $request->input('nom_tuteur');
        $apprenants->region_origine = $request->input('region_origine');
        $apprenants->ville_origine = $request->input('ville_origine');
        $apprenants->filieres_id = $request->input('cours_filiere_id');
        $apprenants->nom_parent = $request->input('nom_parent');
        $apprenants->numero_parent = $request->input('numero_parent');

            $apprenants ->update();
            return redirect("/apprenant.liste");
        }

        public function delete($id) {
            $apprenants = Apprenant::find($id);
    
            if ($apprenants) {
                $apprenants->delete();
            }
            return redirect("/apprenant.liste");
    
        }

        public function profile()
    {
        $apprenants = Apprenant::all();
        $profile = ProfileApprenant::all();
        // dd($apprenants);
        return view('Apprenants.apprenantProfile', compact('apprenants','profile'));
    }

    public function profileID($id)
    {
        $filieres = Filiere::all();
        $apprenants = Apprenant::find($id);
        return view('Apprenants.apprenantProfile',compact('filieres','apprenants'));
    }

    public function pff()
    {
        $pff = Pff::select('pffs.*', 'annees.nom_promotion as annee_name', 'filieres.name as filiere_name')
          ->join('annees', 'annee_id', '=', 'annees.id')
          ->join('filieres', 'filiere_id', '=', 'filieres.id')
          ->get();
        return view('Apprenants.apprenantPff',compact('pff'));
    }
    

    public function cours()
    {
        $support = Support::select('supports.*', 'supports.nom_support AS nom_support', 'filieres.name as filiere_name')
          ->join('filieres', 'supports.filiere_id', '=', 'filieres.id')
          ->get();

        //   dd($support);

        return view('Apprenants.apprenantCours',compact('support'));
    }

    public function telechargerCours($id)
    {
        // Récupère le fichier par son ID
        $fichier = Support::findOrFail($id);

        // Crée une réponse avec le contenu du fichier
        return response()->streamDownload(function () use ($fichier) {
            echo $fichier->contenu;
        }, $fichier->nom, [
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename="' . $fichier->nom . '"'
        ]);
        dd($fichier);
    }
    
    public function planning()
    {
        $plannings = Planning::select('plannings.*', 'plannings.nom as nom', 'annees.nom_promotion as nom_promotion')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->get();
        return view('Apprenants.apprenantPlanning', compact('plannings'));
    }

    public function documentation()
    {
        $documentation = Documentation::all();

        return view('Apprenants.apprenantDoc', compact('documentation'));
    }

    public function absence()
    {
   
        return view('Apprenants.apprenantAbsence');
    }

    public function bulletin()
    {
   
        return view('Apprenants.bulletin');
    }

    public function settings()
    {
   
        return view('Apprenants.settings');
    }

    public function community()
    {
   
        return view('Apprenants.community');
    }
    
 
    public function search(Request $request) {
        $search = $request->search;
    
        $apprenant = Apprenant::where(function($query) use ($search){
                $query->where('nom_complet', 'like', "%$search%")
                      ->orWhere('date_naissance', 'like', "%$search%")
                      ->orWhere('etat', 'like', "%$search%")
                      ->orWhere('numero1', 'like', "%$search%")
                      ->orWhere('email', 'like', "%$search%");
            })
           
            ->get();
    
        // dd($salles); // Debug: affiche les résultats pour vérification
        return view('Apprenants.apprenantSearch', compact('apprenant', 'search'));
    }
}