<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Validator;

use \Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    public function store(Request $request) {
        
      
        $request->validate([
           'name' => 'required',
           'assunto' => 'required',
           'email' => 'required'
       ]);
              
        $contato = Contato::create([
                 'name'        => $request->name,
                'telefone'     => $request->telefone,
                 'assunto'     => $request->assunto,
                 'email'        => $request->email,
                 'mensagem'     => ($request->mensagem==null) ? '' : $request->mensagem 
          ]);
        
          return view('index')->with('msg','Iremos lhe retornar em breve.');
        
         //dd($contato);
    }
}
