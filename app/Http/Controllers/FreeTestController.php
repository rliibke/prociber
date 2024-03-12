<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeTest;
class FreeTestController extends Controller
{
    public function store(Request $request) {
        
            
        $request->validate([
           'name' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'businessname' => 'required',
           'swId' => 'required',
            
       ]);
           
        $contato = FreeTest::create([
                 'name'        => $request->name,
                 'phone'     => $request->phone,
                 'email'        => $request->email,
                 'businessname'     => $request->businessname,
                 'softwareId'      => $request->swId,
                 'ip' => hash('sha512', $request->ip())
          ]);
        
          return view('index')->with('msg','Cadastrado com sucesso');
        
    }
}
