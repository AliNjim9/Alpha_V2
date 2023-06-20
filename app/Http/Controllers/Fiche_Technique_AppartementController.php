<?php

namespace App\Http\Controllers;

use App\Models\Fiche_Technique_Appartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Fiche_Technique_AppartementController extends Controller
{
    public $incrementing = false;
    protected $keyType = 'string';
    public function creation_fiche_technique_appartement(Request $request){
        $validator = Validator::make($request->all(), [
            /*'prix_par_jour ' => ['required', 'float'],
            'prix_par_semaine' => ['required', 'float'],
            'prix_par_mois' => ['required', 'float'],*/
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/fiche_technique_appartement/creation_fiche_technique_appartement',compact('message'));
        }
        $fiche_technique_appartement = new Fiche_Technique_Appartement();
        /*$fiche_technique_appartement->prix_par_jour=$request->input('prix_par_jour');
        $fiche_technique_appartement->prix_par_semaine=$request->input('prix_par_semaine');
        $fiche_technique_appartement->prix_par_mois=$request->input('prix_par_mois');*/
        $fiche_technique_appartement->save();
        $message='Votre fiche Technique a été créé avec succès';
        return view('/fiche_technique_appartement/creation_fiche_technique_appartement',compact('message'));
    }
    public function obtenir_fiche_technique_appartement_avec_id($id)
    {
        $fiche_technique_appartement=Fiche_Technique_Appartement::find($id);
        $user=$fiche_technique_appartement->relatedUser;
        return view('/fiche_technique_appartement/show_by_id', compact('fiche_technique_appartement','user'));
    }
    public function afficher_tout()
    {
        $fiches_technique_appartement = Fiche_Technique_Appartement::get();
        return view('/fiche_technique_appartement/show_all', compact('fiches_technique_appartement'));     
    }
}
