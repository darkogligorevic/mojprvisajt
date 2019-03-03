<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function projekti()
    {
      return $this->belongsTo(Projekti::class);
    }
}
