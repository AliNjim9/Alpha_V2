<?php

namespace App\Http\Controllers;
use App\Models\Contrat_location;
use App\Models\User;
use App\Models\Residence;
use App\Models\Contrat_vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResidenceController extends Controller
{
    public function creation_residence(Request $request){
        $userId = Auth::id();
        $validator = Validator::make($request->all(), [
            'nom' => ['required', 'string'],
            'longeur' => ['required', 'float'],
            'largeur' => ['required', 'float'],
            'bati' => ['required', 'boolean'],
            'nombre_blocs' => ['required', 'integer'],
            'nombre_appartements' => ['required', 'integer'],
            'a_vendre' => ['required', 'boolean'],
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/residence/creation_residence',compact('message'));
        }
        $residence = new Residence();
        $surface=$request->input('longeur')*$request->input('largeur');
        $residence->nom = $request->input('nom');
        $residence->longeur = $request->input('longeur');
        $residence->largeur = $request->input('largeur');
        $residence->surface=$surface;
        $residence->bati = $request->input('bati');
        $residence->nombre_blocs = $request->input('nombre_blocs');
        $residence->nombre_appartements = $request->input('nombre_appartements');
        $residence->a_vendre=$request->input('a_vendre');
        $residence->proprietaire=$userId;
        $residence->terrain_id=$request->input('terrain_id');// doit être envoyé directement depuis client side en relation du terrain correspondant 
        //$residence->fiche_vente=$request->input('fiche_vente');
        $residence->save();
        $message='Residence crée avec succès';
        return view('/residence/creation_residence',compact('message'));
    }
    public function obtenir_residence_avec_id($id)
    {
        $residence=Residence::find($id);
        $user=$residence->relatedUser;
        return view('/residence/show_by_id', compact('residence','user'));
    }
    public function afficher_tout()
    {
        $residences = Residence::get();
        return view('/residence/show_all', compact('residences'));
    }
    public function afficher_a_vendre()
    {
        $residences = Residence::where('a_vendre',1)
            ->get();
        return view('/residence/show_a_vendre', compact('residences'));
    }
    public function afficher_mes_residences()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $residences=$user->Residences()->get();
        return view('/residence/show', compact('residences'));
    }
    public function afficher_mes_residences_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $residence=$user->Residence()
            ->where('bati',1)
            ->get();
        return view('/residence/show', compact('residences'));
    }
    public function afficher_mes_residences_non_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $residences=$user->Residence()
            ->where('bati',0)
            ->get();
        return view('/residence/show', compact('residences'));
    }
    public function afficher_mes_historiques_des_ventes()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $ventes=Contrat_vente::
            where('type_vente','residence')
            ->where('vendeur_id',$userId)
            ->get();
        return view('/residence/show_historiques_ventes', compact('ventes'));
    }
    public function afficher_mes_historiques_des_achats()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $achats=Contrat_vente::
            where('type_vente','residence')
            ->where('acheteur_id',$userId)
            ->get();
        return view('/residence/show_historiques_achats', compact('achats'));
    }
}
