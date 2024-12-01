<?php

namespace App\Http\Controllers;
use App\Models\Cours;
use App\Models\Filiere;
use App\Models\Formateur;
use Illuminate\Http\Request;

class CoursController extends Controller{
    public function index(){

    $cours = Cours::select('cours.*', 'formateurs.nom_complet as nom_formateur', 'filieres.name as filiere_name')
    ->join('formateurs', 'cours.formateurs_id', '=', 'formateurs.id')
    ->join('filieres', 'cours.filieres_id', '=', 'filieres.id')
    ->get();


    // dd($cours);
    return view('Administrateur.coursLister',compact('cours'));
}

/**
* Show the form for creating a new resource.
*/
    public function create(){

    $filieres = Filiere::all(); 
    $formateurs = Formateur::all();
    // dd($formateurs);
    return view('Administrateur.coursAjout', compact('filieres', 'formateurs'));
}

/**
* Store a newly created resource in storage.
*/
    public function store(Request $request){
    if ($request) {
    # code...
    $cours = new Cours();
    
    $cours->nom_cours = $request->input('nom');
    $cours->module = $request->input('module');
    $cours->filieres_id = $request->input('cours_filiere_id');
    $cours->formateurs_id = $request->input('cours_formateur_id');


    
    $cours ->save();
    return redirect("/coursNew.liste");
    }
}

// Function pour modifier

  public function edit($id){
    $filieres = Filiere::all();
    $formateurs = Formateur::all();
    $cours = Cours::find($id);
    return view('Administrateur.coursModifier',compact('cours','filieres','formateurs'));


}



public function editTraitement(Request $request) {



        $cours = Cours::find($request->id);

        
    $cours->nom_cours = $request->input('nom');
    $cours->module = $request->input('module');
    $cours->filieres_id = $request->input('cours_filiere_id');
    $cours->formateurs_id = $request->input('cours_formateur_id');
    
        $cours ->update();
        return redirect("/coursNew.liste");
}

    public function delete($id) {
        $cours = Cours::find($id);

        if ($cours) {
            $cours->delete();
        }
        return redirect("/coursNew.liste");

    }

    public function search(Request $request) {
        $search = $request->search;


        $cours = Cours::where(function($query) use ($search) {
            $query->where('nom_cours', 'like', "%$search%")
                  ->orWhere('module', 'like', "%$search%");
        })
        ->orWhereHas('filiere', function($query) use ($search) {
            $query->where('name', 'like', "%$search%");
        })
        ->orWhereHas('formateur', function($query) use ($search) {
            $query->where('nom_complet', 'like', "%$search%");
        })
        ->with(['filiere', 'formateurs']) // Charger les relations 'filiere' et 'formateur'
        ->get();



    
        // dd($cours); // Debug: affiche les résultats pour vérification
        return view('Administrateur.coursSearch', compact('cours', 'search'));
    }
}
