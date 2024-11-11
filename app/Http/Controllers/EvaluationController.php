<?php

namespace App\Http\Controllers;
use App\Models\Annee;
use App\Models\Semestre;
use App\Models\Filiere;
use App\Models\Evaluation;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {

        $evaluations = Evaluation::select('evaluations.*', 'annees.nom_promotion as annee_name', 'filieres.name as filiere_name', 'semestres.nom_semestre as semestre_name')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->join('filieres', 'filiere_id', '=', 'filieres.id')
        ->join('semestres', 'semestre_id', '=', 'semestres.id')
        ->get();

        return view('Formateurs.evaluationlister',compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        $semestres = Semestre::all();
        $annees = Annee::all();

        return view('Formateurs.evaluationAjout', compact('filieres', 'semestres','annees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $evaluation = new Evaluation();
            
            $evaluation->nom = $request->input('nom');
            $evaluation->type = $request->input('type');
            $evaluation->annee_id = $request->input('annee_id');
            $evaluation->filiere_id = $request->input('filiere_id');
            $evaluation->semestre_id = $request->input('semestre_id');
            $evaluation->date = $request->input('date');
            
            $evaluation ->save();
            return redirect("evaluations.liste");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


  
  

     // Function pour modifier

    public function edit($id)
    {
        $filieres = Filiere::all();
        $semestres = Semestre::all();
        $annees = Annee::all();
        $evaluations = Evaluation::find($id);
        return view('Formateurs.evaluationModifier',compact('filieres','evaluations','annees','semestres' ));
    }

    

    public function editTraitement(Request $request) {


        $evaluation = Evaluation::find($request->id);

            
            $evaluation->nom = $request->input('nom');
            $evaluation->type = $request->input('type');
            $evaluation->annee_id = $request->input('annee_id');
            $evaluation->filiere_id = $request->input('filiere_id');
            $evaluation->semestre_id = $request->input('semestre_id');
            $evaluation->date = $request->input('date');
            
            $evaluation ->update();
            return redirect("evaluations.liste");
        }

        public function delete($id) {
            $filieres = Evaluation::find($id);
    
            if ($filieres) {
                $filieres->delete();
            }
            return redirect("evaluations.liste");
    
        }

        public function search(Request $request) {
            $search = $request->search;

            $evaluations = Evaluation::where(function($query) use ($search){
                $query->where('nom', 'like', "%$search%")
                      ->orWhere('type', 'like', "%$search%")
                      ->orWhere('filiere_id', 'like', "%$search%");
            })
            ->orWhereHas('filiere', function($query) use ($search){
                $query->where('name', 'like', "%$search%");
            })
            ->orWhereHas('semestre', function($query) use ($search){
                $query->where('nom_semestre', 'like', "%$search%");
            })
            ->orWhereHas('annee', function($query) use ($search){
                $query->where('nom_promotion', 'like', "%$search%");
            })
            ->with('filiere') // Charger la relation 'filiere' avec les salles
            ->with('semestre') // Charger la relation 'filiere' avec les salles
            ->with('annee') // Charger la relation 'filiere' avec les salles
            ->get();

            
            // dd($evaluations);
            return view('Formateurs.evaluationSearch', compact('evaluations', 'search'));
        }
}
