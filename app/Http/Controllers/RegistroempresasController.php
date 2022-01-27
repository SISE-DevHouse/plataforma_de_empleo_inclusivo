<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Distrito;
use App\Models\registroempresas;
use Illuminate\Support\Facades\DB;
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
        /* $datos['registroempresasss'] = registroempresas::paginate(5);
        return view('registroempresa.index', $datos);
        */
        //
        return view('HomeEmpresa');
    }

    public function solicitud()
    {

        $distrito = Distrito::paginate();
     

        return view('register-company',compact('distrito'));

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
        request()->validate(Empresa::$rules);

        $empresa = Empresa::create($request->all());

        return view('welcome');
    }
}
