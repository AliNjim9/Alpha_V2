<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AccountConfirmed;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function getAllUsers(){
        $users = User::all()->where('is_admin',0);
        return view('/admin/all_users', compact('users'));
    }
    public function updateUser(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);
        $name = $request->input('name');
        $is_confirmed=$request->has('is_confirmed');
        $validator = Validator::make(
            ['name' => $name],
            ['name' => 'required|string|max:255']
        );
        if ($validator->fails()) {
            return redirect()->back()->with('fail', 'Champs requis !');
        }
        $user->name=$name;
        $user->is_confirmed=$is_confirmed;
        $user->save();

        return redirect()->back()->with('success_update', 'User updated successfully.');
    }
    public function deleteUser(Request $request, $user_id){
        $user = User::findOrFail($user_id);
        if($user){
            $user->delete();
            return redirect()->back()->with('success_delete', 'User deleted successfully');
        }
    }
}
