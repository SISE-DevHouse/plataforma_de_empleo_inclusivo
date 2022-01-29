<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class EditarperfilController extends Controller
{
    //


    public function edit($id)
    {
        $perfil= User::find($id);

        $distrito=Distrito::paginate();
        
        
        return view('usuario.editarperfil',compact('perfil','distrito'));

    }


    public function edit2($id)
    {
        $perfil= User::find($id);
        
        
        return view('usuario.visualizar',compact('perfil'));

    }





    public function update(Request $request, $id)
    {

        $usuario = request()->except(['_token','_method']);

        if($request->hasFile('foto')){

                $usuarioperfil=User::findOrFail($id);
                Storage::delete('public/'.$usuarioperfil->foto);
                $usuario['foto']=$request->file('foto')->store('uploads','public');
        }


        if($request->hasFile('archivo')){

            $usuarioperfil=User::findOrFail($id);
            Storage::delete('public/'.$usuarioperfil->curriculum);
            $usuario['archivo']=$request->file('archivo')->store('uploads','public');
    }



        User::where('id','=',$id)->update($usuario);
      


        return redirect()->route('home');

    }


  
  


}
