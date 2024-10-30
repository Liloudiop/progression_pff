<?php

namespace App\Http\Controllers;
use App\Models\Documentation;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    //

    public function index()
    {
        $documentation = Documentation::all();
        // dd($documentation);
        return view('Formateurs.documentation',compact('documentation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $documentation = Documentation::all();
        return view('Formateurs.documentAjout', compact('documentation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            # code...
            $documentation = new Documentation();
            
            $documentation->nom = $request->input('nom');
            $documentation->lien = $request->input('lien');

            
            $documentation ->save();
            return redirect("/documentation.liste");
        }
    }

     // Function pour modifier

    public function edit($id)
    {
        $documentation = Documentation::find($id);
        return view('Formateurs.documentModifier',['documentation' => $documentation]);
    }

    

    public function editTraitement(Request $request) {


        $documentation = Documentation::find($request->id);

            
        $documentation->nom = $request->input('nom');
        $documentation->lien = $request->input('lien');

        
            $documentation ->update();
            return redirect("/documentation.liste");
        }

        public function delete($id) {
            $documentation = Documentation::find($id);
    
            if ($documentation) {
                $documentation->delete();
            }
            return redirect("/documentation.liste");
    
        }


        public function search(Request $request) {
            $search = $request->search;
        
            $documentation = Documentation::where(function($query) use ($search){
                    $query->where('Nom', 'like', "%$search%")
                          ->orWhere('lien', 'like', "%$search%");
                })
                ->get();
        
            return view('Formateurs.documentationSearch', compact('documentation', 'search'));
        }

}