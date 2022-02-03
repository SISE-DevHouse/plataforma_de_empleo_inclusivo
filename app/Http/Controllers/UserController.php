<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $texto=trim($request->get('texto'));



        $users = DB::table('users')->select('id','name','apellidos','role','email','dni','telefono','tipodiscapacidad','direccion','educacion','espeedu')
        ->where('name','LIKE','%'.$texto.'%')
        ->orWhere('tipodiscapacidad','LIKE','%'.$texto.'%')
        ->orWhere('direccion','LIKE','%'.$texto.'%')
        ->orderBy('apellidos','asc')
        ->paginate(3);

        
        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $user = request()->except(['_token','_method']);
       

        User::where('id','=',$id)->update($user);

        return redirect()->route('usuarios.index')
            ->with('success', 'User updated successfully');
    }





}
