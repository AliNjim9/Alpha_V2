<?php

namespace App\Http\Controllers;

use App\Models\Fiche_Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Fiche_venteController extends Controller
{
    public $incrementing = false;
    protected $keyType = 'string';
    public function creation_fiche_vente(Request $request){
        $validator = Validator::make($request->all(), [
            'prix ' => ['required', 'float'],
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/fiche_vente/creation_fiche_vente',compact('message'));
        }
        $fiche_vente = new Fiche_Vente();
        $fiche_vente->prix=$request->input('prix');
        $fiche_vente->save();
        $message='Votre fiche de vente a été créé avec succès';
        return view('/fiche_vente/creation_fiche_vente',compact('message'));

    }
    public function obtenir_fiche_vente_avec_id($id)
    {
        $fiche_vente=Fiche_Vente::find($id);
        $user=$fiche_vente->relatedUser;
        return view('/fiche_vente/show_by_id', compact('fiche_vente','user'));
    }
    public function afficher_tout()
    {
        $contrats = Fiche_Vente::get();
        return view('/fiche_vente/show_all', compact('contrats'));     
    }
}
