<?php

namespace App\Http\Controllers;
use App\Models\Annee;
use App\Models\Planning;

use Illuminate\Http\Request;

class PlanningController extends Controller
{
    public function index()
    {
        $plannings = Planning::select('plannings.*', 'plannings.nom as nom', 'annees.nom_promotion as nom_promotion')
        ->join('annees', 'annee_id', '=', 'annees.id')
        ->get();

        // $plannings = Planning::all();
        return view('Administrateur.planningLister',compact('plannings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $annees = Annee::all();
        return view('Administrateur.planningAjout', compact('annees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $plannings = new Planning();
            
            $plannings->nom = $request->input('nom');
            $plannings->files = $request->input('files');
            $plannings->annee_id = $request->input('annee_id');
            $plannings->departement = $request->input('departement');

            
            $plannings ->save();
            return redirect("/planning.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $annees =  Annee::all();
        $plannings = Planning::find($id);
        // dd($plannings);
        return view('Administrateur.planningModifier',['plannings' => $plannings, 'annee' => $annees]);
    }

    

    public function editTraitement(Request $request) {


        $plannings = Planning::find($request->id);

            
        $plannings->nom = $request->input('nom');
        $plannings->files = $request->input('files');
        $plannings->annee_id = $request->input('annee_id');
        $plannings->departement = $request->input('departement');
        
            $plannings ->update();
            return redirect("/planning.liste");
        }

        public function delete($id) {
            $plannings = Planning::find($id);
    
            if ($plannings) {
                $plannings->delete();
            }
            return redirect("/planning.liste");
    
        }
}
