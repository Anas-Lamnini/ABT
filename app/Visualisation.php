<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visualisation extends Model
{
    protected $table="document";
    protected $fillabel=['id','DocumentName','Description','image'];

    public function scopeSearch($query,$s){
        return $query -> where('DocumentName','like', '%'.$s.'%')
                      -> orWhere('Description','like', '%'.$s.'%');
    }

}
