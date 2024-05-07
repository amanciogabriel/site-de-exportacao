<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Exception;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * renderiza a pagina de contato
     * 
     * @return View
    */
    public function contato()
    {
        return view('contato');
    }

    /**
     * 
    */
    public function enviarFormulario(Request $request)
    {
        dd($request->all());
        try {
            Contato::create([
                //nome da coluna no banco => nome do campo do formulario 
                'name' => $request->name,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'assunto' => $request->assunto,
                'mensagem' => $request->mensagem,
            ]);
    
            return back()->withSuccess('Formulário enviado');
        } catch (Exception $exception) {
            return back()->withErrors($exception->getMessage());
        }
    }
}
