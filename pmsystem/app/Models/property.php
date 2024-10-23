<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    //
    public function gallery(){
        return $this->hasMany(gallery::class);
    }
}
