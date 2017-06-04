<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 22/05/17
 * Time: 14:31
 */

namespace IASD\Http\Controllers;


use IASD\Entities\Devolucao;
use IASD\Entities\Membro;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    public function novo(){
        return view('membro.novo');
    }

    public function store(Request $request)
    {

    }

    /**
     * Lista todos os membros
     * @return \Illuminate\View\View
     */
    public function listar()
    {
        $membros = Membro::all();
        return view('membro.listar', compact('membros'));
    }

    /**
     * Retorna a view com o membro
     * @param $id Id do membro
     * @return \Illuminate\View\View Editar Membro
     */
    public function editar( $id )
    {
        $membro = Membro::find($id);
        return view('membro.editar', compact('membro'));
    }


    public function update(Request $request, $id)
    {
        $membro = Membro::find($id);
        $membro->fill($request->all())->save();
        return redirect(route('membro.detalhes', ['id' => $id]));
    }



    public function apagar( $id )
    {
        $membro = Membro::find($id);
        return view('membro.remover', compact('membro'));
    }



    public function destroy( $id )
    {
        Membro::destroy($id);
        return redirect()->route('iasd.home');
    }


    public function detalhes( $id )
    {
        $membro = Membro::find($id);
        $devolucoes = Devolucao::where('membro_id', '=', $id)->get();
        return view('membro.detalhes', compact('membro', 'devolucoes'));
    }
}