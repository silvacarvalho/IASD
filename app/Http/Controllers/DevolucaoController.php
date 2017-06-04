<?php

namespace IASD\Http\Controllers;


use Carbon\Carbon;
use IASD\Entities\Devolucao;
use IASD\Entities\Membro;
use Illuminate\Http\Request;

class DevolucaoController extends Controller
{
    public function registrar()
    {
        $dataMembro = $this->getMembros();
        return view('devolucao.registrar', compact('dataMembro'));
    }


    public function store(Request $request)
    {
        Devolucao::create($request->all());
        $dataMembro = $this->getMembros();
        return view('devolucao.registrar', compact('dataMembro'));
    }


    public function relatorio()
    {
        $relatorios = Membro::with('devolucoes')->get();
        return view('devolucao.relatorio', compact('relatorios'));
    }








    public function getMembros()
    {
        $membros = Membro::all();
        $dataMembro = [];
        foreach ($membros as $membro){
            $dataMembro[$membro->id] = $membro->nome;
        }
        return $dataMembro;
    }
}