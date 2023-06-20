<?php

namespace App\Http\Controllers;
use App\Models\Terrain;
use App\Models\Contrat_vente;
use App\Models\Contrat_location;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TerrainController extends Controller
{
    public function creation_terrain(Request $request){
        $userId = Auth::id();
        $validator = Validator::make($request->all(), [
            'longeur' => ['required', 'float'],
            'largeur' => ['required', 'float'],
            'bati' => ['required', 'boolean'],
            'a_vendre' => ['required', 'boolean'],
        ]);
        if ($validator->fails()) {
            $message='Champs requis';
            return view('/terrain/creation_terrain',compact('message'));
        }
        $terrain = new Terrain();
        $surface=$request->input('longeur')*$request->input('largeur');
        $terrain->longeur = $request->input('longeur');
        $terrain->largeur = $request->input('largeur');
        $terrain->surface=$surface;
        $terrain->bati = $request->input('bati');
        $terrain->a_vendre=$request->input('a_vendre');
        $terrain->proprietaire=$userId;
        //$residence->fiche_vente=$request->input('fiche_vente');
        $terrain->save();
        $message='Terrain crée avec succès';
        return view('/terrain/creation_terrain',compact('message'));
    }
    public function obtenir_terrain_avec_id($id)
    {
        $terrain =Terrain::find($id);
        $user=$terrain->relatedUser;
        return view('/terrain/show_by_id', compact('terrain','user'));
    }
    public function afficher_tout()
    {
        $terrains = Terrain::get();
        return view('/terrain/show_all', compact('terrains'));        
    }
    public function afficher_a_vendre()
    {
        $terrains = Terrain::with('relatedUser')->where('a_vendre',1)
            ->get();
        return view('/terrain/show_a_vendre', compact('terrains'));
    }
    public function afficher_mes_terrains()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $terrains=$user->Terrains()->get();
        return view('/terrain/show', compact('terrains'));
    }
    public function afficher_mes_terrains_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $terrains=$user->Terrains()
            ->where('bati',1)
            ->get();
        return view('/terrain/show_batis', compact('terrains'));
    }
    public function afficher_mes_terrains_non_batis()
    {
        $userId=Auth::id();
        $user = User::find($userId);
        $terrains=$user->Terrains()
            ->where('bati',0)
            ->get();
        return view('/terrain/show_non_batis', compact('terrains'));
    }
    public function afficher_mes_historiques_des_ventes()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $ventes=Contrat_vente::
            where('type_vente','terrain')
            ->where('vendeur_id',$userId)
            ->get();
        return view('/terrain/show_historiques_ventes', compact('ventes'));
    }
    public function afficher_mes_historiques_des_achats()
    {
        $userId=Auth::id();
        $user = User::find(Auth::id());
        $achats= Contrat_vente::
            where('type_vente','terrain')
            ->where('acheteur_id',$userId)
            ->get();
        return view('/terrain/show_historiques_achats', compact('achats'));
    }
    
}
