<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';

    function projetos() {
        return $this->belongsToMany('App\Projeto',"alocacaos")->withPivot('horas_semanais');
    }
}
