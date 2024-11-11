<?php

namespace App\Http\Controllers;
use App\Models\Annee;
use App\Models\Semestre;

use Illuminate\Http\Request;

class SemestreController extends Controller
{
    public function index()

    {

        $semestre = Semestre::select('semestres.*', 'annees.nom_promotion as annee_name')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->get();

        return view('Administrateur.semestreLister',compact('semestre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $annee = Annee::all();
        return view('Administrateur.semestreAjout', compact('annee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $semestre = new Semestre();
            
            $semestre->nom_semestre = $request->input('nom');
            $semestre->annee_id = $request->input('annee_id');
            $semestre->date_debut = $request->input('date_debut');
            $semestre->date_fin = $request->input('date_fin');

            
            $semestre ->save();
            return redirect("/semestres.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $semestre = Semestre::find($id);
        $annee = Annee::all();

        return view('Administrateur.semestreModifier',['semestre' => $semestre, 'annee' => $annee]);
    }

    

    public function editTraitement(Request $request) {


        $semestre = Semestre::find($request->id);

            
        $semestre->nom_semestre = $request->input('nom');
        $semestre->annee_id = $request->input('annee_id');
        $semestre->date_debut = $request->input('date_debut');
        $semestre->date_fin = $request->input('date_fin');
        
            $semestre ->update();
            return redirect("/semestres.liste");
        }

        public function delete($id) {
            $semestre = Semestre::find($id);
    
            if ($semestre) {
                $semestre->delete();
            }
            return redirect("/semestres.liste");
    
        }


        public function search(Request $request) {
            $search = $request->search;
    
            $semestre = Semestre::where(function($query) use ($search){
                $query->where('nom_semestre', 'like' ,"%$search%")
                ->orwhere('date_debut', 'like' ,"%$search%")
                ->orwhere('date_fin', 'like' ,"%$search%");
            })
        
        ->orWhereHas('annee', function($query) use ($search){
            $query->where('nom_promotion', 'like', "%$search%");
        })
        ->with('annee') // Charger la relation 'filiere' avec les salles
        ->get();

            
    
            // dd($formateurs);
            return view('Administrateur.semestreSearch', compact('semestre', 'search'));
        }
}
