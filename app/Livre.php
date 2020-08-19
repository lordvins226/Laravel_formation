<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $fillable = [
        'titre', 'description', 'image', 'user_id'
    ];

   public function user()
   {
       return $this->belongsTo('App\User');
   }
}
