<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
     protected $table = 'pembayaran';
    
      public function user()
    {
        return $this->belongsTo('App\User', 'siswa_id');
    }
    
    

}
