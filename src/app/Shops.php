<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function user() {
        return $this->hasMany('App/User');
    }
}
