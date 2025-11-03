<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Em que ano foi anunciada oficialmente a Kings League Brasil?',
            'opcao_a' => '2023',
            'opcao_b' => '2024',
            'opcao_c' => '2025',
            'opcao_d' => '2022',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem é o presidente da Kings League Brasil?',
            'opcao_a' => 'Ronaldinho Gaúcho',
            'opcao_b' => 'Kaká',
            'opcao_c' => 'Neymar',
            'opcao_d' => 'Piqué',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o formato de jogo da Kings League (número de jogadores por time em campo)?',
            'opcao_a' => '7x7',
            'opcao_b' => '11x11',
            'opcao_c' => '9x9',
            'opcao_d' => '5x5',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Onde foi disputada a final da Copa do Mundo de Nações da Kings League vencida pelo Brasil?',
            'opcao_a' => 'Espanha',
            'opcao_b' => 'Itália',
            'opcao_c' => 'México',
            'opcao_d' => 'México',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual foi o placar da final entre Brasil e Colômbia na Kings League World Cup Nations?',
            'opcao_a' => '2x0',
            'opcao_b' => '4x2',
            'opcao_c' => '3x2',
            'opcao_d' => '5x3',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual jogador brasileiro se destacou marcando todos os gols do Brasil na final contra a Colômbia?',
            'opcao_a' => 'Kelvin',
            'opcao_b' =>' Lucas Moura',
            'opcao_c' => 'Hulk',
            'opcao_d' => 'Vini Jr.',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Qual será o próximo país-sede da Kings League World Cup Nations depois da Itália?',
            'opcao_a' => 'Argentina',
            'opcao_b' => 'Espanha',
            'opcao_c' => 'Brasil',
            'opcao_d' => 'Estados Unidos',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Um dos times confirmados na Kings League Brasil é o:',
            'opcao_a' => 'Ginga FC, presidido por Ronaldinho',
            'opcao_b' => 'OneFootball FC, presidido por Kaká',
            'opcao_c' => 'Fúria FC, presidido por Cris Guedes',
            'opcao_d' => 'Anjos FC, presidido por Léo Stronda',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Qual o principal diferencial da Kings League em relação às ligas tradicionais de futebol?',
            'opcao_a' => 'Jogos mais longos',
            'opcao_b' => 'Transmissões sem torcida',
            'opcao_c' => 'Regras inovadoras e foco no entretenimento',
            'opcao_d' => 'Apenas jogadores profissionais',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Quantos times foram anunciados inicialmente para a Kings League Brasil?',
            'opcao_a' => '6',
            'opcao_b' => '8',
            'opcao_c' => '10',
            'opcao_d' => '12',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Quem criou o conceito original da Kings League?',
            'opcao_a' => 'Gerard Piqué',
            'opcao_b' => 'Lionel Messi',
            'opcao_c' => 'Ibai Llanos',
            'opcao_d' => 'Xavi Hernández',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'O termo “Wildcard” na Kings League se refere a:',
            'opcao_a' => 'Jogador expulso',
            'opcao_b' => 'Carta surpresa com vantagem durante o jogo',
            'opcao_c' => 'Penalidade máxima',
            'opcao_d' => 'Nome da bola oficial',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Qual cidade italiana sediou a final vencida pelo Brasil?',
            'opcao_a' => 'Milão',
            'opcao_b' => 'Roma',
            'opcao_c' => 'Turim',
            'opcao_d' => 'Nápoles',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'Em que ano o Brasil sediará a próxima edição da Kings League World Cup Nations?',
            'opcao_a' => '2025',
            'opcao_b' => '2026',
            'opcao_c' => '2027',
            'opcao_d' => '2028',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

                Pergunta::create([
            'texto' => 'A chegada da Kings League Brasil representa:',
            'opcao_a' => 'Um retrocesso no futebol',
            'opcao_b' => 'Uma nova forma de entretenimento esportivo',
            'opcao_c' => 'O fim dos campeonatos tradicionais',
            'opcao_d' => 'Um torneio apenas para celebridades',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

    }
}
