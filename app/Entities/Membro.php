<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 23/05/17
 * Time: 22:18
 */

namespace IASD\Entities;


use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{

    protected $table = "membros";

    protected $fillable = [
        'nome',
        'responsável',
        'cpf',
        'rg',
        'telefone',
        'celular',
        'nascimento',
        'email',
        'endereço',
        'número',
        'bairro',
        'cep',
        'observação'
    ];


    public function devolucoes()
    {
        return $this->hasMany(Devolucao::class);
    }
}