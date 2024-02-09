<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtivosController extends Controller
{
    // Método para exibir o formulário de cadastro de ativos
    public function create()
    {
        return view('ativos.cadastro');
    }

    // Método para lidar com o envio do formulário de cadastro de ativos
    public function store(Request $request)
    {
        // Lógica para armazenar os dados do ativo no banco de dados
        // Este é apenas um exemplo básico, substitua com a lógica real de armazenamento

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'data_aquisicao' => 'required|date',
            // Adicione validações para outros campos conforme necessário
        ]);

        // Crie o ativo
        Ativo::create($data);

        // Redirecionar para alguma página após o cadastro (opcional)
        return redirect('/ativos')->with('success', 'Ativo cadastrado com sucesso!');
    }
    
}
