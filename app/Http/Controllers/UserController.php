<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getDataUser()
    {
        $dataUser = User::all();


        return view('user.index', ['datauser' => $dataUser]);
    }

    public function show($id)
    {
        $user = User::find($id);;


        return view('user.show', ['user' => $user]);
    }

    
    
}
