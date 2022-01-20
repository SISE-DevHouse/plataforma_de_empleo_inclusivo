<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditarperfilController extends Controller
{
    //


    public function edit($id)
    {
        $perfil= User::find($id);
        
        
        return view('usuario.editarperfil',compact('perfil'));

    }



}
