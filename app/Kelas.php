<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    
 
    public function jurusan(){
        return $this->hasOne('App\Jurusan');
      }
}
