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


    public function edit2($id)
    {
        $perfil= User::find($id);
        
        
        return view('usuario.visualizar',compact('perfil'));

    }


    public function mostrarcv($id)
    {
        $userr = User::where('id',$id)->firstOrFail();
        $pfile = storage_path( path: "app/public/" . $userr->curriculum);
        return response()->download(file:$pfile);
    }


    public function update(Request $request, $id)
    {

        $usuario = request()->except(['_token','_method']);

        if($request->hasFile('foto')){

                $usuarioperfil=User::findOrFail($id);
                Storage::delete('public/'.$usuarioperfil->foto);
                $usuario['foto']=$request->file('foto')->store('uploads','public');

                
        };

        if ($request->hasFile('curriculum')) {
                $usuarioperfil=User::findOrFail($id);
                Storage::delete('public/'.$usuarioperfil->curriculum);
                $usuario['curriculum']=$request->file('curriculum')->store('uploads','public');
                

        }            User::where('id','=',$id)->update($usuario);

        return redirect()->route('home');
    }



}
