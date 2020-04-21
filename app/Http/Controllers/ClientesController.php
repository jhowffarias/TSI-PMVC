<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function listar(){
        $clientes = Clientes::all();

        //Atenção! clientes/listar.blade.php vira clientes.list-group-item-action
        return view('clientes.listar',['clientes'=>$clientes]);
    }
}
