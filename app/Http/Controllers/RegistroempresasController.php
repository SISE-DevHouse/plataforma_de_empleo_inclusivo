<?php

namespace App\Http\Controllers;

use App\Models\registroempresas;
use Illuminate\Http\Request;

class RegistroempresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['registroempresasss'] = registroempresas::paginate(5);
        return view('registroempresa.index', $datos);

        //
    }

    public function solicitud()
    {
       
        return view('form-company');

        //
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registroempresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardamos todo menos el token
        $arrdatos = request()->except('_token');
        registroempresas::insert($arrdatos);

        //return response()->json($arrdatos);
        return redirect('home/registroempresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroempresas  $registroempresas
     * @return \Illuminate\Http\Response
     */
    public function show(registroempresas $registroempresas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroempresas  $registroempresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrFail es para buscar x el id
        $datos = registroempresas::findOrFail($id);
        //compact es para pasar los datos
        return view('registroempresa.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroempresas  $registroempresas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //en esta ocasion se excluye tambien el metodo
        $arrdatos = request()->except('_token', '_method');
        //aca preguntamos si el id de lo que quiere eliminar es = $id, lo esta buscndo entre todos los existentes 
        registroempresas::where('id', '=', $id)->update($arrdatos);
        //findOrFail es para buscar x el id
        $datos = registroempresas::findOrFail($id);
        //compact es para pasar los datos
        return view('registroempresa.edit', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroempresas  $registroempresas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        registroempresas::destroy($id);
        return redirect('registroempresa');
        //
    }
}
