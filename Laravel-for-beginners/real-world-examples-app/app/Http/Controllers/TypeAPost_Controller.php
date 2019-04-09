<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\TypeAPost;

class TypeAPost_Controller extends Controller
{
  public function MethodCreate($a)
  {
		$var = new TypeAPost;
		$var->data_field_a = $a;
		$var->data_field_b = $a;
		$var->data_field_c = $a;
		$var->save();
  }
  public function MethodRead($a)
  {
    return "<pre>".var_dump(TypeAPost::model_read($a))."</pre>";
  }
  public function MethodUpdate($a, $b)
  {
    TypeAPost::model_update($a, $b);
  }
  public function MethodDelete($a)
  {
    $f = TypeAPost::model_delete($a);
    return $f;
  }
}
