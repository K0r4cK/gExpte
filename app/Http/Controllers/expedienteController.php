<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class expedienteController extends Controller
{
    public function index(){
        return view ('expedientes.index');
    }

    public function create(){
        return view ('expedientes.create');
    }

    public function show($expte){
        return view ('expedientes.show', compact('expte'));
    }
}
