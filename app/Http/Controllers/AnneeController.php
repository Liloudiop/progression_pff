<?php

namespace App\Http\Controllers;
use App\Models\Annee;
use Illuminate\Http\Request;

class AnneeController extends Controller
{
    
    public function index()
    {
        $annee = Annee::all();
        return view('Administrateur.anneeLister',compact('annee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $annee = Annee::all();
        return view('Administrateur.anneeAjout', compact('annee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $annee = new Annee();
            
            $annee->nom_promotion = $request->input('nom');
            $annee->date_debut = $request->input('date_debut');
            $annee->date_fin = $request->input('date_fin');

            
            $annee ->save();
            return redirect("/annees.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $annee = Annee::find($id);
        return view('Administrateur.anneeModifier',['annee' => $annee]);
    }

    

    public function editTraitement(Request $request) {


        $annee = Annee::find($request->id);

            
        $annee->nom_promotion = $request->input('nom');
        $annee->date_debut = $request->input('date_debut');
        $annee->date_fin = $request->input('date_fin');
        
            $annee ->update();
            return redirect("/annees.liste");
        }

        public function delete($id) {
            $annee = Annee::find($id);
    
            if ($annee) {
                $annee->delete();
            }
            return redirect("/annees.liste");
    
        }

        public function search(Request $request) {
            $search = $request->search;
    
            $annee = Annee::where(function($query) use ($search){
                $query->where('nom_promotion', 'like' ,"%$search%")
                ->orwhere('date_debut', 'like' ,"%$search%")
                ->orwhere('date_fin', 'like' ,"%$search%");
            })->get();

            
    
            return view('Administrateur.anneeSearch', compact('annee', 'search'));
        }
}
