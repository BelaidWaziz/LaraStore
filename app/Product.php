<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
