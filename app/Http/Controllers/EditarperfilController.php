<?php

namespace App\Http\Controllers;

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
        
        
        return view('usuario.editarperfil',compact('perfil'));

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
            Storage::delete('public/'.$usuarioperfil->archivo);
            $usuario['archivo']=$request->file('archivo')->store('uploads','public');
    }


        User::where('id','=',$id)->update($usuario);
      


        return redirect()->route('home');

    }


    function downloadFile($fileName){

        $contents = Storage::disk('local')->get($fileName);
        $tempFile = "temp.doc";
        file_put_contents($tempFile, $contents);
   
         header("Content-type: application/doc");
         header("Content-Length: " . filesize($tempFile));
         readfile($tempFile);

  }



}
