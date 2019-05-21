<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDEntity extends Model
{
  protected $fillable = [
    'name',
  ];
  public function TypeAEntities(){
    return $this->hasManyThrough('App\TypeAEntity', 'App\TypeBEntity');
  }
}
