<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // 
    public function produtos() {
        return $this->hasMany('App\Produto'); // quando se quer ir do "muitos" para "um"
    }

}
 