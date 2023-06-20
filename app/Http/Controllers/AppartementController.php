<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use App\Models\Contrat_vente;
use App\Models\Contrat_location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppartementController extends Controller
{
    public $incrementing = false;
    protected $keyType = 'string';
    public function creation_appartement(Request $request){
        $userId = Auth::id();
        $validator = Validator::make($request->all(), [
            'nom_bloc' => ['required', 'string'],
            'longeur' => ['required', 'float'],
            'largeur' => ['required', 'float'],
            'nombre_pieces' => ['required', 'integer'],
            'bati' => ['required', 'boolean'],
            'a_vendre' => ['required', 'boolean'],
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/appartement/creation_appartement',compact('message'));
        }
        $appartement = new Appartement();
        $surface=$request->input('longeur')*$request->input('largeur');
        $appartement->nom = $request->input('nom_bloc');
        $appartement->longeur = $request->input('longeur');
        $appartement->largeur = $request->input('largeur');
        $appartement->surface=$surface;
        $appartement->nombre_pieces = $request->input('nombre_pieces');
        $appartement->bati = $request->input('bati');
        $appartement->a_vendre=$request->input('a_vendre');
        $appartement->proprietaire=$userId;
        $appartement->terrain_id=$request->input('terrain_id');// doit être envoyé directement depuis client side en relation du terrain correspondant 
        $appartement->bloc_id=$request->input('bloc_id');// doit être envoyé directement depuis client side en relation du bloc correspondant 
        $appartement->residence_id=$request->input('residence_id');// doit être envoyé directement depuis client side en relation du residence correspondant 
        //$appartement->fiche_vente=$request->input('fiche_vente');
        //$appartement->fiche_technique=$request->input('fiche_technique');
        $appartement->save();
        $message='Appartement a été créé avec succès';
        return view('/appartement/creation_appartement',compact('message'));

    }
    public function obtenir_appartement_avec_id($id)
    {
        $appartement=Appartement::find($id);
        $user=$appartement->relatedUser;
        return view('/appartement/show_by_id', compact('appartement','user'));
    }
    public function afficher_tout()
    {
        $appartements = Appartement::get();
        return view('/appartement/show_all', compact('appartements'));
    }
    public function afficher_a_vendre()
    {
        $appartements = Appartement::with('relatedUser')->where('a_vendre',1)
            ->get();
        return view('/appartement/show_a_vendre', compact('appartements'));
    }
    public function afficher_mes_appartements()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $appartements=$user->Appartements()->get();
        return view('/appartement/show', compact('appartements'));
    }
    public function afficher_mes_appartements_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $appartements=$user->Appartements()
            ->where('bati',1)
            ->get();
        return view('/appartement/show_batis', compact('appartements'));
    }
    public function afficher_mes_appartements_non_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $appartements=$user->Appartements()
            ->where('bati',0)
            ->get();
        return view('/appartement/show_non_batis', compact('appartements'));
    }
    public function afficher_historique_des_ventes()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $ventes= Contrat_vente::
            where('type_vente','appartement')
            ->where('vendeur_id',$userId)
            ->get();
        return view('/appartement/show_historiques_ventes', compact('ventes'));
    
    }
    public function afficher_mes_historiques_des_achats()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $achats= Contrat_vente::
            where('type_vente','appartement')
            ->where('acheteur_id',$userId)
            ->get();
        return view('/appartement/show_historiques_achats', compact('achats'));
    }
}
