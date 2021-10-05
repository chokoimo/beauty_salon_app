<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'reserves';

      protected $guarded = array('id');

      public $timestamps = true;

      protected $fillable = [
        'date','user_id','menu_id'
      ];

      public function menu()
      {
          return $this->belongsTo('App\Menu');
      }

      public function user()
      {
          return $this->belongsTo('App\User');
      }

      public function shops()
      {
          return $this->belongsTo('App\Shops');
      }
}
