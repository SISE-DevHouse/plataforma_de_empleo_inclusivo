<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class EditarperfilController extends Controller
{
    //


    public function edit($id)
    {
        $perfil= User::find($id);
        
        
        return view('usuario.editarperfil',compact('perfil'));

    }



    public function update(Request $request, $id)
    {

        $usuario = request()->except(['_token','_method']);

        if($request->hasFile('foto')){

                $usuarioperfil=User::findOrFail($id);
                Storage::delete('public/'.$usuarioperfil->foto);
                $usuario['foto']=$request->file('foto')->store('uploads','public');
        }
    
        User::where('id','=',$id)->update($usuario);
      


        return redirect()->route('home');

    }



}
