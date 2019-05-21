<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypeAEntity;

class TypeAEntity_Controller extends Controller
{
  public function MethodCreate($a)
  {
		// TypeAEntity::create([
    //   'data_field_a'=>$a,
    //   'data_field_b'=>$a,
    //   'data_field_c'=>$a,
		// 	'type_b_entity_id'=>$a,
    // ]);

  }
  public function MethodRead($a)
  {
    return TypeAEntity::find($a)->TypeBEntity;
  }
  public function MethodUpdate()
  {
    TypeAEntity::onlyTrashed()->restore();
  }
  public function MethodDelete()
  {
    TypeAEntity::onlyTrashed()->forceDelete();

  }

}
