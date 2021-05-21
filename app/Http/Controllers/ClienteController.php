<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
 
    public function index()
    {
        //
        return Cliente::all();
    }

    public function store(Request $request)
    {
        request()->validate([
            'nome' => 'required',
            'email' => 'required',
            'idade' => 'required',
            'sexo' => 'required',
            'senha' => 'required',
        ]);

        return Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'idade' => $request->input('idade'),
            'sexo' => $request->input('sexo'),
            'senha' => $request->input('senha'),
        ]);
    }

    public function show($id)
    {
        //
        return Cliente::find($id);
    }

    public function update(Request $request,Cliente $cliente)
    {
        //
        //
        request()->validate([
            'nome' => 'required',
            'email' => 'required',
            'idade' => 'required',
            'sexo' => 'required',
            'senha' => 'required',
        ]);
        
        $success = $cliente->update([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'idade' => $request->input('idade'),
            'sexo' => $request->input('sexo'),
            'senha' => $request->input('senha'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy($id)
    {
        //
        return Cliente::destroy($id);
    }
}
