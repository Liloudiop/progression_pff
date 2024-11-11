<?php

namespace App\Http\Controllers;


use App\Models\Filiere;
use App\Models\Annee;
use App\Models\Pff;
use Illuminate\Http\Request;

class PffController extends Controller
{
    public function index(){
    
        $pff = Pff::select('pffs.*', 'annees.nom_promotion as annee_name', 'filieres.name as filiere_name')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->join('filieres', 'filiere_id', '=', 'filieres.id')
        ->get();
    
    
        
        return view('Administrateur.pffLister',compact('pff'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        $filieres = Filiere::all();
        $annee = Annee::all();
        return view('Administrateur.pffAjout', compact('filieres', 'annee'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $pff = new Pff();
            
            $pff->nom_theme = $request->input('name');
            $pff->files = $request->input('image');
            $pff->nom_acteur = $request->input('nom_acteur');
            $pff->annee_id = $request->input('pff_annee_id');
            $pff->filiere_id = $request->input('pff_filiere_id');
    
    
    
            // dd($pff);
            $pff ->save();
            return redirect("/pffNew.liste");
        }
    }
    
     // Function pour modifier
    
    public function edit($id)
    {
        $filieres = Filiere::all();
        $annee = Annee::all();
        $pff = Pff::find($id);
        return view('Administrateur.pffModifier',compact('pff','filieres','annee'));
    
    
    }
    
    
    
    public function editTraitement(Request $request) {
    
    
        $pff = Pff::find($request->id);
    
            
           
        $pff->nom_theme = $request->input('name');
        $pff->files = $request->input('image');
        $pff->nom_acteur = $request->input('nom_acteur');
        $pff->annee_id = $request->input('pff_annee_id');
        $pff->filiere_id = $request->input('pff_filiere_id');

        
            $pff ->update();
            return redirect("/pffNew.liste");
        }
    
        public function delete($id) {
            $pff = Pff::find($id);
    
            if ($pff) {
                $pff->delete();
            }
            return redirect("/pffNew.liste");
    
        }
    
    
        //Download fichier
    
        public function telecharger($id)
        {
            // Trouver le fichier dans la base de données
            $fichier = Pff::find($id);
            dd($fichier);
    
            if (!$fichier) {
                return abort(404, 'Fichier non trouvé');
            }
    
            // Vérifier si le fichier existe dans le stockage
            $chemin = storage_path("app/public/{$fichier->chemin_fichier}");
    
            if (file_exists($chemin)) {
                return response()->download($chemin, $fichier->nom_fichier);
            } else {
                return abort(404, 'Fichier non trouvé');
            }
    
            return view('Administrateur.pffLister',compact('fichier'));
        }
    
        public function search(Request $request) {
            $search = $request->search;
        
            $pff = Pff::where(function($query) use ($search){
                    $query->where('nom_theme', 'like', "%$search%")
                          ->where('files', 'like', "%$search%")
                          ->orWhere('nom_acteur', 'like', "%$search%");
                })
                ->orWhereHas('filiere', function($query) use ($search){
                    $query->where('name', 'like', "%$search%");
                })
                ->orWhereHas('annee', function($query) use ($search){
                    $query->where('nom_promotion', 'like', "%$search%");
                })
                ->with('filiere') // Charger la relation 'filiere' avec les salles
                ->with('annee') // Charger la relation 'annee' avec les salles
                ->get();
        
            // dd($salles); // Debug: affiche les résultats pour vérification
            return view('Administrateur.pffSearch', compact('pff', 'search'));
        }

       
}