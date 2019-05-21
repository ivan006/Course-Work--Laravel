<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBEntity extends Model
{

    protected $fillable = [
      'data_field_a',
      'data_field_b',
      'type_d_entity_id',
    ];

    public function TypeAEntity(){
      return $this->hasOne('App\TypeAEntity');
    }

	  public function TypeAEntities(){
	    return $this->hasMany('App\TypeAEntity');
	  }
    public function TypeCEntities(){
      return $this->belongsToMany('App\TypeCEntity')->withPivot('created_at');
    }
}
