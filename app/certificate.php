<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    public $timestamps = false;
    public function relationships(){
        return $this->belongsTo('App\Education');
    }

}
