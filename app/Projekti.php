<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Projekti extends Model
{

  public $table = 'projekti_tabela';
  protected $fillable= [
    'title', 'opis' , 'naziv_projekta'
  ];
  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

}
