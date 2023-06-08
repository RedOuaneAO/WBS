<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    use HasFactory;

    public function  abonne(){
        return $this->belongsTo(Abonne::class);
      }

      public function  releves(){
        return $this->hasMany(Releve::class);
      }

}
