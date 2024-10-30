<?php

namespace App\Http\Controllers;
use App\Models\Support;
use App\Models\Filiere;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    //

    public function index()
    {

        $support = Support::select('supports.*', 'supports.nom_support AS nom_support', 'filieres.name as filiere_name')
          ->join('filieres', 'supports.filiere_id', '=', 'filieres.id')
          ->get();
        
            // dd($support);
            return view('Formateurs.support',compact('support'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $filieres = Filiere::all();
        // dd($filieres);
        return view('Formateurs.supportAjout', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $support = new Support();
            
            $support->nom_support = $request->input('nom');
            $support->files = $request->input('files');
            $support->filiere_id = $request->input('filiere_id');

            
            $support ->save();
            return redirect("/support.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $filieres = Filiere::all();
        $support = Support::find($id);

        return view('Formateurs.supportModifier',compact('support','filieres'));
        
    }

    

    public function editTraitement(Request $request) {


        $support = Support::find($request->id);

            
        $support->nom_support = $request->input('nom');
        $support->files = $request->input('files');
        $support->filiere_id = $request->input('filiere_id');


            $support ->update();
            return redirect("/support.liste");
        }

        public function delete($id) {
            $support = Support::find($id);
    
            if ($support) {
                $support->delete();
            }
            return redirect("/support.liste");
    
        }

        public function search(Request $request) {
            $search = $request->search;
        
            $support = Support::where(function($query) use ($search){
                    $query->where('nom_support', 'like', "%$search%")
                          ->orWhere('files', 'like', "%$search%")
                          ->orWhere('filiere_id', 'like', "%$search%");
                })
                ->orWhereHas('filiere', function($query) use ($search){
                    $query->where('name', 'like', "%$search%");
                })
                ->with('filiere') // Charger la relation 'filiere' avec les salles
                ->get();
        
            // dd($salles); // Debug: affiche les résultats pour vérification
            return view('Formateurs.supportSearch', compact('support', 'search'));
        }
}
