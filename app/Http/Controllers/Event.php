<?php

namespace App\Http\Controllers;

class Event extends Controller
{
    public function index()
    {
        $nome = "William Oliveira";
        $idade = 21;
        $array = [1, 2, 3, 4, 5];
        $nomes = ['William', 'Alexandre', 'Daniel', 'Augusto', 'Aldo'];

        return view(
            'contact',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'Desenvolvedor Web Jr.',
                'array' => $array,
                'nomes' => $nomes
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }
}
