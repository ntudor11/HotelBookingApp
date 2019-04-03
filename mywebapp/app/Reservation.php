<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function client() {
      return $this->belongsTo('App\Client', 'client_id', 'id');
    }
}
