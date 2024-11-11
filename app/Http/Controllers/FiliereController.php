<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        // return view('filieres.index', compact('filieres'));
        return view('Administrateur.filierelister',compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Administrateur.filiereAjout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $filieres = new Filiere();
            
            $filieres->name = $request->input('nom');
            $filieres->description = $request->input('description');
            $filieres->departement = $request->input('departement');
            
            $filieres ->save();
            return redirect("filieres.liste");
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
        $filiere = Filiere::all();
        $filieres = Filiere::find($id);
        return view('Administrateur.filiereModifier',compact('filieres','filiere'));
    }

    

    public function editTraitement(Request $request) {


        $filieres = Filiere::find($request->id);

            
            $filieres->name = $request->input('nom');
            $filieres->description = $request->input('description');
            $filieres->departement = $request->input('departement');
            
            $filieres ->update();
            return redirect("filieres.liste");
        }

        public function delete($id) {
            $filieres = Filiere::find($id);
    
            if ($filieres) {
                $filieres->delete();
            }
            return redirect("filieres.liste");
    
        }

        public function search(Request $request) {
            $search = $request->search;
    
            $filieres = Filiere::where(function($query) use ($search){
                $query->where('name', 'like' ,"%$search%")
                ->orwhere('description', 'like' ,"%$search%")
                ->orwhere('departement', 'like' ,"%$search%");
            })->get();

            
    
            // dd($formateurs);
            return view('Administrateur.filiereSearch', compact('filieres', 'search'));
        }
}
