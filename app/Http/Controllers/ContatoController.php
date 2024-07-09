<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Validator;

use \Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    public function store(Request $request) {

         //tenta enviar email, mas se falhar quarda no banco de dados
         try {

      
                $transport = (new \Swift_SmtpTransport('smtp.gmail.com', '465', 'ssl'))
                        ->setUsername('naoresponda@webassist.com.br')
                        ->setPassword('naoresponda123');

                $mailer = new \Swift_Mailer($transport);

                // message
                $message = (new \Swift_Message($request->assunto))
                        ->setFrom([$request->email => $empresa->email])
                        ->setTo(['comercial@prociber.com.br'])
                        ->setCc('ti@zabke.com.br')
                        ->setBody($request->assunto);

                // Send the message
                $result = $mailer->send($message);

                //return response()->json($result);
                
            } catch (\Exception $ex) {
                
                $contato = Contato::create([
                        'name'        => $request->name,
                       'telefone'     => $request->telefone,
                        'assunto'     => $request->assunto,
                        'email'        => $request->email,
                        'mensagem'     => ($request->mensagem==null) ? '' : $request->mensagem 
                 ]);
   

            }
        
          return view('contato')->with('msg','Agracemos seu contato! Iremos lhe retornar em breve.');
        
         //dd($contato);
    }
}
