<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservoir extends Model
{
    use HasFactory;

    public function reservoirMember()
   {
       return $this->belongsTo('App\Models\Member', 'author_id', 'id');
   }

}
