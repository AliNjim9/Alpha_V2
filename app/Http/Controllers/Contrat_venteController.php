<?php

namespace App\Http\Controllers;
use App\Models\Appartement;
use App\Models\Contrat_vente;

use App\Models\Residence;
use App\Models\Terrain;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Contrat_venteController extends Controller
{
    public $incrementing = false;
    protected $keyType = 'string';
    public function creation_contrat_vente(Request $request){
        $userId = Auth::id();
        $validator = Validator::make($request->all(), [
            'vendeur_id' => ['required', 'string'],
            'vente_id_terrain' => ['required_without_all:vente_id_residence,vente_id_appartement','string'],
            'vente_id_residence' => ['required_without_all:vente_id_terrain,vente_id_appartement','string'],
            'vente_id_appartement' => ['required_without_all:vente_id_terrain,vente_id_residence','string'],
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/contrat_vente/creation_contrat_vente',compact('message'));
        }
        $contrat_vente = new Contrat_vente();

        if(!is_null($request->input('vente_id_terrain'))){
            $strArray = explode('-',$request->input('vente_id_terrain'));
            $contrat_vente->vente_id_terrain=$request->input('vente_id_terrain');
            $type_vente = end($strArray);
        }else if(!is_null($request->input('vente_id_residence'))){
            $strArray = explode('-',$request->input('vente_id_residence'));
            $contrat_vente->vente_id_residence=$request->input('vente_id_residence');
            $type_vente = end($strArray);
        }else{
            $strArray = explode('-',$request->input('vente_id_appartement'));
            $contrat_vente->vente_id_appartement=$request->input('vente_id_appartement');
            $type_vente = end($strArray);
        }
        $contrat_vente->acheteur_id=$userId;
        $contrat_vente->vendeur_id=$request->input('vendeur_id');
        $contrat_vente->type_vente=$type_vente;
        $contrat_vente->date_contrat=Carbon::now();
        $contrat_vente->save();
        $message='Votre contrat de vente a été créé avec succès';
        return view('/contrat_vente/creation_contrat_vente',compact('message'));
        
    }
    public function obtenir_contrat_vente_avec_id($id)
    {
        $contrat_vente=Contrat_vente::find($id);
        $user=$contrat_vente->relatedUser;
        return view('/contrat_vente/show_by_id', compact('contrat_vente','user'));
    }
    public function afficher_tout()
    {
        $contrats_ventes = Contrat_vente::get();
        return view('/contrat_vente/show_all', compact('contrats_ventes'));     
    }
    public function afficher_mes_contrats()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $contrats_ventes=Contrat_vente::
        where('vendeur_id',$userId)
        ->orwhere('acheteur_id',$userId)
        ->get();
       
        return view('/contrat_vente/show_mes_contrats', compact('contrats_ventes'));
    }
    public function afficher_mes_contrats_ventes()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $contrats_ventes=Contrat_vente::
        where('vendeur_id',$userId)
        ->get();
        $vente_details= array();
        foreach($contrats_ventes as $contrat_vente){
            switch($contrat_vente->type_vente){
                case("terrain"):
                    $details=Terrain::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
                case("residence"):
                    $details=Residence::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
                case("appartement"):
                    $details=Appartement::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
            }
        }
        return view('/contrat_vente/vendeur/show_ventes', compact('contrats_ventes','vente_details'));
    }
    public function afficher_mes_contrats_achats()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $contrats_ventes=Contrat_vente::
        where('acheteur_id',$userId)
        ->get();
        $vente_details= array();
        foreach($contrats_ventes as $contrat_vente){
            switch($contrat_vente->type_vente){
                case("terrain"):
                    $details=Terrain::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
                case("residence"):
                    $details=Residence::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
                case("appartement"):
                    $details=Appartement::findOrFail($contrat_vente->vente_id);
                    array_push($vente_details,$details);
                    break;
            }
        }
        return view('/contrat_vente/acheteur/show_achats', compact('contrats_ventes','vente_details'));

    }
}
