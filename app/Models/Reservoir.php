<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservoir extends Model
{
    use HasFactory;

    public function reservoirMembers()
   {
       return $this->hasMany('App\Models\Member', 'reservoir_id', 'id');

      // return $this->belongsTo('App\Models\Member', 'author_id', 'id');
   }

//    tas table kuris savyje NETURI kazkas_id yra hasMany.
//    tas table kuris savyje TURI kazkas_id yra belongsTo. 
//    modeliuose aprasant hasmany, belongs to, nurodome KITA modeli:
//    ->hasMany('App\Models\Member', pas reservoir
//    ->belongsTo('App\Models\Reservoir', pas member


}
