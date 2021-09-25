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

    public function show($expte){
        return view ('expedientes.show', compact('expte'));
    }
}
