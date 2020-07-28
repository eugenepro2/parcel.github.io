<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
  public function option()
  {
    return $this->hasMany(Option::class, 'field_id', 'id');
  }
}
