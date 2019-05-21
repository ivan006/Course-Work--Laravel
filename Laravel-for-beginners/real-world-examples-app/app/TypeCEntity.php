<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCEntity extends Model
{
  protected $fillable = [
    'name',
  ];
  public function TypeBEntities(){
    return $this->belongsToMany('App\TypeBEntity');
  }
}
