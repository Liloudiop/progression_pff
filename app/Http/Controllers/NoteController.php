<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\Apprenant;
use App\Models\Evaluation;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index(){

        $note = Note::select('notes.*', 'apprenants.nom_complet as apprenant_nom', 'evaluations.nom as evaluation_nom')
        ->join('apprenants', 'apprenant_id', '=', 'apprenants.id')
        ->join('evaluations', 'evaluation_id', '=', 'evaluations.id')

        ->get();
        return view('Formateurs.noteLister', compact('note'));
    }


    public function create(){

        $evaluation = Evaluation::all();
        $apprenant = Apprenant::all();
        return view('Formateurs.noteAjout', compact('evaluation', 'apprenant'));
    }

    public function store(Request $request)
    {
        
        
            $note = new Note();
            
            $note->note = $request->input('moyenne');
            $note->apprenant_id= $request->input('apprenant_id');
            $note->evaluation_id = $request->input('evaluation_id');


            
            $note ->save();
            return redirect("/notes.liste");
        
    }



    public function edit($id)
    {
        $evaluation =  Evaluation::all();
        $apprenant = Apprenant::all();
        $note = Note::find($id);


        return view('Formateurs.noteModifier',['note' => $note, 'evaluation' => $evaluation, 'apprenant' => $apprenant]);
    }

    

    public function editTraitement(Request $request) {


        $note = Note::find($request->id);

        $note->note = $request->input('moyenne');
        $note->apprenant_id= $request->input('apprenant_id');
        $note->evaluation_id = $request->input('evaluation_id');
        
        
            $note ->update();
            return redirect("/notes.liste");
        }

        public function delete($id) {
            $note = Note::find($id);
    
            if ($note) {
                $note->delete();
            }
            return redirect("/notes.liste");
    
        }




        public function search(Request $request){
            
    $search = $request->input('search');
    $classeId = $request->input('classe');

    $query = Note::query();

    if ($search) {
        $query->where('apprenant_nom', 'LIKE', "%$search%");
    }

    if ($classeId) {
        $query->where('classe_id', $classeId); // Assurez-vous que vos notes ont un `classe_id`
    }

    $notes = $query->get();
    $classes = Classe::all(); // Récupère toutes les classes

  


        return view('Formateurs.noteSearch', compact('notes', 'classes', 'search', 'classeId'));


    }


}
