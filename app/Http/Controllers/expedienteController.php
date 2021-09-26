<?php

namespace App\Http\Controllers;

use App\Models\Expedientes;
use Illuminate\Http\Request;

class expedienteController extends Controller
{
    public function index(){

        $files = Expedientes::paginate();

        return view ('expedientes.index', compact('files'));
    }

    public function create(){

        return view ('expedientes.create');
    }

    public function store(Request $request){

        $expte = new Expedientes();

        $expte->numexpte = $request->numexpte;
        $expte->yearexpte = $request->yearexpte;
        $expte->caratula = $request->caratula;
        $expte->objeto = $request->objeto;
        $expte->category = $request->category;
        $expte->ulmov = $request->ulmov;
        $expte->cad = $request->cad;

        $expte->save;
    }

    public function show($id){

        $expte = Expedientes::find($id);

        return view ('expedientes.show', compact('expte'));
    }
}

