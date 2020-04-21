<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // para colocarle el nombre a la tabla
    //protected $table = 'my_tble';

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
