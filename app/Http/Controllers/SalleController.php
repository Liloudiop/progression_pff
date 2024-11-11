<?php

namespace App\Http\Controllers;
use App\Models\Salle;
use App\Models\Filiere;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {

        $salles = Salle::select('salles.*', 'salles.nom_salle AS nom_salle', 'filieres.name as filiere_name')
          ->join('filieres', 'salles.filiere_id', '=', 'filieres.id')
          ->get();
        
            // dd($salles);
            return view('Administrateur.salleLister',compact('salles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $filieres = Filiere::all();
        return view('Administrateur.salleAjout', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $salles = new Salle();
            
            $salles->nom_salle = $request->input('nom_salle');
            $salles->capacite = $request->input('capacite');
            $salles->emplacement = $request->input('emplacement');
            $salles->filiere_id = $request->input('salle_filiere_id');

            
            $salles ->save();
            return redirect("/sallesNew.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $filieres = Filiere::all();
        $salles = Salle::find($id);

        return view('Administrateur.salleModifier',compact('salles','filieres'));
        
    }

    

    public function editTraitement(Request $request) {


        $salles = Salle::find($request->id);

            
        $salles->nom_salle = $request->input('nom_salle');
        $salles->capacite = $request->input('capacite');
        $salles->emplacement = $request->input('emplacement');
        $salles->filiere_id = $request->input('salle_filiere_id');

            $salles ->update();
            return redirect("/sallesNew.liste");
        }

        public function delete($id) {
            $salles = Salle::find($id);
    
            if ($salles) {
                $salles->delete();
            }
            return redirect("/sallesNew.liste");
    
        }

        public function search(Request $request) {
            $search = $request->search;
        
            $salles = Salle::where(function($query) use ($search){
                    $query->where('nom_salle', 'like', "%$search%")
                          ->orWhere('emplacement', 'like', "%$search%")
                          ->orWhere('capacite', 'like', "%$search%")
                          ->orWhere('filiere_id', 'like', "%$search%");
                })
                ->orWhereHas('filiere', function($query) use ($search){
                    $query->where('name', 'like', "%$search%");
                })
                ->with('filiere') // Charger la relation 'filiere' avec les salles
                ->get();
        
            // dd($salles); // Debug: affiche les résultats pour vérification
            return view('Administrateur.salleSearch', compact('salles', 'search'));
        }
}