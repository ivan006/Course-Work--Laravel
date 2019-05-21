<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBEntityTypeCEntity extends Model
{
  protected $table = 'type_b_entity_type_c_entity';
  protected $fillable = [
    'type_b_entity_id',
    'type_c_entity_id',
  ];

}
