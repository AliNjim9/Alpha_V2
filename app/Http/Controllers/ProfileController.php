<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function userProfile()
    {
        return view('/user/espace_user');
    }
    public function adminProfile()
    {
        return view('/admin/espace_admin');
    }
}
