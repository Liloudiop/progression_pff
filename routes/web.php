<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});



// Utilisation des routes groupés

// Route::prefix('apprenant')->group(function(){


//         //Autre maniere de faire du routage par controle
//   Route::get('liste',"App\Http\Controllers\Pages@liste" );   
//   Route::get('create/{id}',"App\Http\Controllers\Pages@create" );
    
// });



Route::get('filieres.liste',"App\Http\Controllers\FiliereController@index")->name('filiere.liste');
Route::get('create',"App\Http\Controllers\FiliereController@create")->name('filieres.create');
Route::post('/filieres.store1', "App\Http\Controllers\FiliereController@store")->name('filieres.store1');
Route::get('filiere/edit/{id}', "App\Http\Controllers\FiliereController@edit")->name('filieres.edit');
Route::patch('filiere/edit/traitement', "App\Http\Controllers\FiliereController@editTraitement")->name('filieres.editTraitement');
Route::delete('/filiere/delete/{id}', "App\Http\Controllers\FiliereController@delete")->name('filieres.delete');
Route::get('filieres_search', "App\Http\Controllers\FiliereController@search")->name('filieres.search');



// Route::prefix('apprenant')->group(function(){  

Route::get('apprenant.liste',"App\Http\Controllers\ApprenantController@index")->name('apprenant.liste');
Route::get('apprenant.create',"App\Http\Controllers\ApprenantController@create")->name('apprenant.create');
Route::post('/apprenant.store', "App\Http\Controllers\ApprenantController@store")->name('apprenant.store');
Route::get('apprenant/edit/{id}', "App\Http\Controllers\ApprenantController@edit")->name('apprenant.edit');
Route::get('apprenant/show/{id}', "App\Http\Controllers\ApprenantController@show")->name('apprenant.show');
Route::get('apprenant_search', "App\Http\Controllers\ApprenantController@search")->name('apprenant.search');



Route::patch('apprenant/edit/traitement', "App\Http\Controllers\ApprenantController@editTraitement")->name('apprenant.editTraitement');
Route::delete('apprenant/delete/{id}', "App\Http\Controllers\ApprenantController@delete")->name('apprenant.delete');
Route::get('apprenant.profile',"App\Http\Controllers\ApprenantController@profile")->name('apprenant.profile');
Route::get('apprenant.profile.create',"App\Http\Controllers\ProfileApprenantController@create")->name('apprenant.profile.create');
Route::post('apprenant.profileStore',"App\Http\Controllers\ProfileApprenantController@store")->name('apprenant.profileStore');
Route::get('apprenant.profile/{id}', "App\Http\Controllers\ApprenantController@profileID")->name('apprenant.profile');
Route::get('apprenant.pff', "App\Http\Controllers\ApprenantController@pff")->name('apprenant.pff');
Route::get('apprenant.cours', "App\Http\Controllers\ApprenantController@cours")->name('apprenant.cours');
Route::get('apprenant.telechargerCours', "App\Http\Controllers\ApprenantController@telechargerCours")->name('apprenant.telechargerCours');
Route::get('apprenant.planning', "App\Http\Controllers\ApprenantController@Planning")->name('apprenant.planning');
Route::get('apprenant.doc', "App\Http\Controllers\ApprenantController@documentation")->name('apprenant.doc');
Route::get('apprenant.absence', "App\Http\Controllers\ApprenantController@absence")->name('apprenant.absence');
Route::get('apprenant.bulletin', "App\Http\Controllers\ApprenantController@bulletin")->name('apprenant.bulletin');
Route::get('apprenant.settings', "App\Http\Controllers\ApprenantController@settings")->name('apprenant.settings');
Route::get('apprenant.community', "App\Http\Controllers\ApprenantController@community")->name('apprenant.community');


Route::get('apprenantImg.image/{id}', "App\Http\Controllers\ImageApprenantController@show")->name('apprenantImg.image');
Route::post('apprenantImg.store', "App\Http\Controllers\ImageApprenantController@store")->name('apprenantImg.store');
Route::get('apprenantImg.create', "App\Http\Controllers\ImageApprenantController@create")->name('apprenantImg.create');



// });


Route::get('annees.liste',"App\Http\Controllers\AnneeController@index")->name('annees.liste');
Route::get('annees.create',"App\Http\Controllers\AnneeController@create")->name('annees.create');
Route::post('/annees.store', "App\Http\Controllers\AnneeController@store")->name('annees.store');
Route::get('annee/edit/{id}', "App\Http\Controllers\AnneeController@edit")->name('annees.edit');
Route::patch('annee/edit/traitement', "App\Http\Controllers\AnneeController@editTraitement")->name('annees.editTraitement');
Route::delete('annee/delete/{id}', "App\Http\Controllers\AnneeController@delete")->name('annees.delete');
Route::get('annees_search', "App\Http\Controllers\AnneeController@search")->name('annees.search');






Route::get('sallesNew.liste',"App\Http\Controllers\SalleController@index")->name('sallesNew.liste');
Route::get('sallesNew.create',"App\Http\Controllers\SalleController@create")->name('sallesNew.create');
Route::post('/sallesNew.store', "App\Http\Controllers\SalleController@store")->name('sallesNew.store');
Route::get('sallesNew/edit/{id}', "App\Http\Controllers\SalleController@edit")->name('sallesNew.edit');
Route::patch('salleNew/edit/traitement', "App\Http\Controllers\SalleController@editTraitement")->name('sallesNew.editTraitement');
Route::delete('salleNew/delete/{id}', "App\Http\Controllers\SalleController@delete")->name('sallesNew.delete');
Route::get('salles_search', "App\Http\Controllers\SalleController@search")->name('sallesNew.search');









//Formateur modification

Route::get('formateursNew.liste',"App\Http\Controllers\FormateurController@index")->name('formateursNew.lister');
Route::get('formateursNew.create',"App\Http\Controllers\FormateurController@create")->name('formateursNew.create');
Route::post('/formateursNew.store', "App\Http\Controllers\FormateurController@store")->name('formateursNew.store');
Route::get('formateurNew/edit/{id}', "App\Http\Controllers\FormateurController@edit")->name('formateursNew.edit');
Route::patch('formateurNew/edit/traitement', "App\Http\Controllers\FormateurController@editTraitement")->name('formateursNew.editTraitement');
Route::delete('formateurNew/delete/{id}', "App\Http\Controllers\FormateurController@delete")->name('formateursNew.delete');
Route::get('formateurNew-profile/{id}', "App\Http\Controllers\FormateurController@profile")->name('formateur-profile');
Route::get('formateurNew/show/{id}', "App\Http\Controllers\FormateurController@show")->name('formateursNew.show');
Route::get('formateurNew_search', "App\Http\Controllers\FormateurController@search")->name('formateursNew.search');


Route::get('formateursNew_profile/{id}', "App\Http\Controllers\FormateurController@profilNew")->name('formateursNew_profile');
Route::get('formateurNew.planning', "App\Http\Controllers\FormateurController@Planning")->name('formateurNew.planning');
Route::get('formateurNew.cours', "App\Http\Controllers\FormateurController@cours")->name('formateurNew.cours');
Route::get('formateurNew.statistique', "App\Http\Controllers\FormateurController@statistique")->name('formateurNew.statistique');
Route::get('formateurNew.doc', "App\Http\Controllers\FormateurController@documentation")->name('formateurNew.doc');
Route::get('formateurNew.cahier', "App\Http\Controllers\FormateurController@cahierDeCharge")->name('formateurNew.cahier');
Route::get('formateurNew.settings', "App\Http\Controllers\FormateurController@settings")->name('formateurNew.settings');
Route::get('formateurNew.community', "App\Http\Controllers\FormateurController@community")->name('formateurNew.community');
Route::get('formateurNew.note', "App\Http\Controllers\FormateurController@note")->name('formateurNew.note');
Route::get('formateurNew.eleve', "App\Http\Controllers\FormateurController@listEleve")->name('formateurNew.eleve');
Route::get('formateurNew.classeSearch', "App\Http\Controllers\FormateurController@searchClasse")->name('formateurNew.classeSearch');
Route::get('formateurNew.searchNote', "App\Http\Controllers\FormateurController@searchNote")->name('formateurNew.searchNote');
Route::get('formateurNew.noteApprenant/{filiere}', "App\Http\Controllers\FormateurController@noteEleveshow")->name('formateurNew.noteApprenant');





Route::prefix('cours')->group(function(){  

Route::get('cours.liste',"App\Http\Controllers\CoursController@index")->name('cours.liste');
Route::get('cours.create',"App\Http\Controllers\CoursController@create")->name('cours.create');
Route::post('/cours.store', "App\Http\Controllers\CoursController@store")->name('cours.store');
Route::get('cours/edit/{id}', "App\Http\Controllers\CoursController@edit")->name('cours.edit');
Route::patch('/edit/traitement', "App\Http\Controllers\CoursController@editTraitement")->name('cours.editTraitement');
Route::delete('/delete/{id}', "App\Http\Controllers\CoursController@delete")->name('cours.delete');



});

//Cours new


// Route::prefix('coursNew')->group(function(){  

    Route::get('coursNew.liste',"App\Http\Controllers\CoursController@index")->name('coursNew.liste');
    Route::get('coursNew.create',"App\Http\Controllers\CoursController@create")->name('coursNew.create');
    Route::post('/coursNew.store', "App\Http\Controllers\CoursController@store")->name('coursNew.store');
    Route::get('coursNew/edit/{id}', "App\Http\Controllers\CoursController@edit")->name('coursNew.edit');
    Route::patch('/edit/traitement', "App\Http\Controllers\CoursController@editTraitement")->name('coursNew.editTraitement');
    Route::delete('coursNews/delete/{id}', "App\Http\Controllers\CoursController@delete")->name('coursNew.delete');
    Route::get('coursNew_search', "App\Http\Controllers\CoursController@search")->name('coursNew.search');

    
    
    
    // });





Route::get('pffNew.liste',"App\Http\Controllers\PffController@index")->name('pffNew.liste');
Route::get('pffNew.create',"App\Http\Controllers\PffController@create")->name('pffNew.create');
Route::post('/store', "App\Http\Controllers\PffController@store")->name('pffNew.store');
Route::get('pffNew/edit/{id}', "App\Http\Controllers\PffController@edit")->name('pffNew.edit');
Route::patch('pffNew/edit/traitement', "App\Http\Controllers\PffController@editTraitement")->name('pffNew.editTraitement');
Route::delete('/pffNew/delete/{id}', "App\Http\Controllers\PffController@delete")->name('pffNew.delete');
// routes/web.php
Route::get('/telecharger/{id}', "App\Http\Controllers\PffController@telecharger")->name('telecharger');
Route::get('pff_search', "App\Http\Controllers\PffController@search")->name('pffNew.search');





Route::get('documentation.liste',"App\Http\Controllers\DocumentationController@index")->name('documentation.liste');
Route::get('documentation/create',"App\Http\Controllers\DocumentationController@create")->name('documentation.create');
Route::post('/filieres.store', "App\Http\Controllers\DocumentationController@store")->name('documentation.store');
Route::get('documentation/edit/{id}', "App\Http\Controllers\DocumentationController@edit")->name('documentation.edit');
Route::patch('documentation/edit/traitement', "App\Http\Controllers\DocumentationController@editTraitement")->name('documentation.editTraitement');
Route::delete('/documentation/delete/{id}', "App\Http\Controllers\DocumentationController@delete")->name('documentation.delete');
Route::get('documentation_search', "App\Http\Controllers\DocumentationController@search")->name('documentation.search');



Route::get('support.liste',"App\Http\Controllers\SupportController@index")->name('support.liste');
Route::get('support/create',"App\Http\Controllers\SupportController@create")->name('support.create');
Route::post('/support.store', "App\Http\Controllers\SupportController@store")->name('support.store');
Route::get('support/edit/{id}', "App\Http\Controllers\SupportController@edit")->name('support.edit');
Route::patch('support/edit/traitement', "App\Http\Controllers\SupportController@editTraitement")->name('support.editTraitement');
Route::delete('/support/delete/{id}', "App\Http\Controllers\SupportController@delete")->name('support.delete');
Route::get('support_search', "App\Http\Controllers\SupportController@search")->name('support.search');




Route::get('planning.liste',"App\Http\Controllers\PlanningController@index")->name('planning.liste');
Route::get('planning/create',"App\Http\Controllers\PlanningController@create")->name('planning.create');
Route::post('/planning.store', "App\Http\Controllers\PlanningController@store")->name('planning.store');
Route::get('planning/edit/{id}', "App\Http\Controllers\PlanningController@edit")->name('planning.edit');
Route::patch('planning/edit/traitement', "App\Http\Controllers\PlanningController@editTraitement")->name('planning.editTraitement');
Route::delete('/planning/delete/{id}', "App\Http\Controllers\PlanningController@delete")->name('planning.delete');
Route::get('planning_search', "App\Http\Controllers\PlanningController@search")->name('planning.search');





Route::get('semestres.liste',"App\Http\Controllers\SemestreController@index")->name('semestres.liste');
Route::get('semestres.create',"App\Http\Controllers\SemestreController@create")->name('semestres.create');
Route::post('/semestres.store', "App\Http\Controllers\SemestreController@store")->name('semestres.store');
Route::get('semestres/edit/{id}', "App\Http\Controllers\SemestreController@edit")->name('semestres.edit');
Route::patch('semestres/edit/traitement', "App\Http\Controllers\SemestreController@editTraitement")->name('semestres.editTraitement');
Route::delete('semestres/delete/{id}', "App\Http\Controllers\SemestreController@delete")->name('semestres.delete');
Route::get('semestres_search', "App\Http\Controllers\SemestreController@search")->name('semestres.search');





Route::get('evaluations.liste',"App\Http\Controllers\EvaluationController@index")->name('evaluations.liste');
Route::get('evaluations.create',"App\Http\Controllers\EvaluationController@create")->name('evaluations.create');
Route::post('/evaluations.store', "App\Http\Controllers\EvaluationController@store")->name('evaluations.store');
Route::get('evaluations/edit/{id}', "App\Http\Controllers\EvaluationController@edit")->name('evaluations.edit');
Route::patch('/edit/traitement', "App\Http\Controllers\EvaluationController@editTraitement")->name('evaluations.editTraitement');
Route::delete('evaluations/delete/{id}', "App\Http\Controllers\EvaluationController@delete")->name('evaluations.delete');
Route::get('evaluations_search', "App\Http\Controllers\EvaluationController@search")->name('evaluations.search');