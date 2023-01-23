<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';

    function desenvolvedores(){
        return $this->belongsToMany('App\Desenvolvedor',"alocacaos")->withPivot('horas_semanais');
    }
}
