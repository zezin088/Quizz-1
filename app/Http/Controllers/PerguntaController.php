<?php

namespace App\Http\Controllers;

use App\Models\Pergunta;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    // Mostra a página inicial de boas vindas ao quizz
    public function inicio()
    {
        $total_perguntas = Pergunta::count();

        return view(
            'perguntas.inicio',
            compact('total_perguntas')
        );
    }

    // Mostra a página para responder as perguntas do quizz
    public function responder()
    {
        // Pega todas as perguntas do banco de dados
        $perguntas = Pergunta::all();

        // Retorna a view com as perguntas
        return view(
            'perguntas.responder',
            compact('perguntas')
        );
    }

    // Processa as respostas enviadas pelo usuário
    public function processarRespostas(Request $request)
    {
        // Lógica para verificar as respostas e calcular a pontuação

        // Pega as respostas do request
        $respostas = $request->except('_token');

        // Inicializa com a pontuação zero
        $pontuacao = 0;

        // Verifica cada resposta
        foreach($respostas as $id_pergunta => $resposta_usuario) {
            // Pega a pergunta do banco de dados
            $pergunta = Pergunta::find($id_pergunta);

            // Verifica se a resposta está correta
            if ($pergunta && $pergunta->resposta_correta == $resposta_usuario) {
                $pontuacao += $pergunta->pontos;
            }
        }

        // Retorna a view com a pontuação final
        return view('perguntas.resultado', compact('pontuacao'));
    }
}
