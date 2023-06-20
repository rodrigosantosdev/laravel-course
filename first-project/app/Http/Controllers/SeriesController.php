<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;


class SeriesController extends Controller
{
    public function index() {

      // maneira de pegar todos os registros
      // $series = Serie::all();
      
      // maneira de pegar um registro usando query, posso ordenar o resultado
      $series = Serie::query()->orderBy('nome')->get();

      // retorna o resultado na view, onde o arquivo fica dentro de uma pasta;
      return view('series.index', compact('series'));
    }

    public function create() {
      return view('series.create');
    }

    public function store (Request $request) {

      // faz uma request, pega os dados do formulário do input
      // $nomeSerie = $request->input('nome');
      
      // cria um objeto da classe Serie
      // $serie = new Serie();
      
      // insere os dados do formulário do campo nome no objeto.
      // $serie->nome = $nomeSerie;
      
      // salva no banco
      // $serie->save();

      // forma mais enxuta de salvar no banco
      Serie::create($request->all());
      // redireciona para a página de series.
      return redirect('/series');
    }
}
