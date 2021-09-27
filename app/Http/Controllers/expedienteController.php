<?php

namespace App\Http\Controllers;

use App\Models\Expedientes;
use Illuminate\Http\Request;

class expedienteController extends Controller
{
    public function index(){

        $files = Expedientes::orderBy('id', 'desc')->paginate();

        return view ('expedientes.index', compact('files'));
    }

    public function create(){

        return view ('expedientes.create');
    }

    public function store(Request $request){

        $request->validate([
            'numexpte' => 'required',
            'yearexpte' => 'required',
            'caratula' => 'required',
            'objeto' => 'required',
            'category' => 'required',
            'ulmov' => 'required',
            'cad' => 'required',

        ]);

        $expte = new Expedientes();

        $expte->numexpte = $request->numexpte;
        $expte->yearexpte = $request->yearexpte;
        $expte->caratula = $request->caratula;
        $expte->objeto = $request->objeto;
        $expte->category = $request->category;
        $expte->ulmov = $request->ulmov;
        $expte->cad = $request->cad;

        $expte->save();

        return redirect()->route('expedientes.show', $expte);
    }

    public function show(Expedientes $expte){

        return view ('expedientes.show', compact('expte'));

    }

    public function edit(Expedientes $expte){

        return view ('expedientes.edit', compact('expte'));

    }

    public function update(Request $request, Expedientes $expte){

        $request->validate([
            'numexpte' => 'required',
            'yearexpte' => 'required',
            'caratula' => 'required',
            'objeto' => 'required',
            'category' => 'required',
            'ulmov' => 'required',
            'cad' => 'required',

        ]);

        $expte->numexpte = $request->numexpte;
        $expte->yearexpte = $request->yearexpte;
        $expte->caratula = $request->caratula;
        $expte->objeto = $request->objeto;
        $expte->category = $request->category;
        $expte->ulmov = $request->ulmov;
        $expte->cad = $request->cad;

        $expte->save();

        return redirect()->route('expedientes.show', $expte);
    }
};
