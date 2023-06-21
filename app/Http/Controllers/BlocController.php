<?php

namespace App\Http\Controllers;

use App\Models\Bloc;
use Illuminate\Http\Request;

class BlocController extends Controller
{
    public $incrementing = false;
    protected $keyType = 'string';
    public function obtenir_bloc_avec_id($id)
    {
        $bloc=Bloc::find($id);
        $user=$bloc->relatedUser;
        return view('/bloc/show_by_id', compact('bloc','user'));
    }
    public function afficher_tout()
    {
        $blocs = Bloc::get();
        return view('/bloc/show_all', compact('blocs'));     
    }
    public function afficher_mes_blocs_batis()
    {
        
    }
    public function afficher_mes_blocs_non_batis()
    {
        
    }
}
