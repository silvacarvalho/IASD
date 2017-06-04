<?php
/**
 * Created by PhpStorm.
 * User: rafael
 * Date: 25/05/17
 * Time: 10:08
 */

namespace IASD\Entities;

use Illuminate\Database\Eloquent\Model;

class Devolucao extends Model
{
    protected $table = "devolucoes";

    protected $fillable = [
        'valor',
        'tipo',
        'referência_mês',
        'data',
        'membro_id'
    ];


    public function membro()
    {
        return $this->belongsTo(Membro::class);
    }
}