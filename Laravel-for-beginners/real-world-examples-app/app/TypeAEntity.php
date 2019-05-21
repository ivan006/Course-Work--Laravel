<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeAEntity extends Model
{


    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
      'data_field_a',
      'data_field_b',
      'data_field_c',
      // 'type_b_entity_id',
    ];
    static function model_create($a, $b, $c)
    {
      DB::insert('insert into type_a_entities(data_field_a, data_field_b, data_field_c) values(?, ?, ?)', [$a, $b, $c]);
    }
    static function model_read($a)
    {
      return DB::select('select * from type_a_entities where data_field_a  = ?', [$a]);
    }
    static function model_update($a, $b)
    {
      DB::update('update type_a_entities set data_field_a  = ? where id = ?', [$a, $b]);
    }
    static function model_delete($a)
    {
      DB::delete('delete from type_a_entities where id = ?', [$a]);
    }

	  public function TypeBEntity(){
	    return $this->belongsTo('App\TypeBEntity');
	  }
}
