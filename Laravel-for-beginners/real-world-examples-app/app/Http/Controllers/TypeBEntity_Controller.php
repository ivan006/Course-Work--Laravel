<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypeBEntity;
use App\TypeAEntity;

class TypeBEntity_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($a, $b)
    // public function create($a, $b)
    {

        TypeBEntity::create([
          'data_field_a'=>$a,
          'data_field_b'=>$a,
          'type_d_entity_id'=>$b,
        ]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show($a)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    public function update($a, $b)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($a)
    {

      TypeBEntity::destroy($a);

    }



    public function showAIndex()
    {
        //
    }


    public function showACreate($a, $b)
    {




        TypeBEntity::findOrFail($a)->TypeAEntities()->save(
  				new TypeAEntity([
  					'data_field_a'=>$b,
  					'data_field_b'=>$b,
  					'data_field_c'=>$b,
  					'type_b_entity_id'=>$b,
  				])
  			);
    }


    public function showAStore(Request $request)
    {
        //
    }


    public function showAShow($a)
    {

        // return TypeBEntity::find($a)->TypeAEntity->all();
        foreach (TypeBEntity::findOrFail($a)->TypeAEntities as $var){
  				echo $var->data_field_a. "<br>";
  			}
    }


    public function showAEdit($id)
    {
        //
    }


    public function showAUpdate($a, $b)
    {
      // $var = TypeAEntity::whereTypeBEntityId($a)->first();
			// $var->data_field_a = $b;
			// $var->save();
      $var = TypeBEntity::findOrFail($a)->TypeAEntities()->whereId(1)->update([
        'data_field_a'=>$b
      ]);
    }


    public function showADestroy($a)
    {
      TypeBEntity::findOrFail($a)->TypeAEntity->forceDelete();
      // $var = TypeBEntity::findOrFail($a)->TypeAEntities()->whereId(1)->delete();


    }






    public function showCLinkIndex()
    {
        //
    }


    public function showCLinkCreate($a, $b, $c)
    {
      TypeBEntity::findOrFail($a)->TypeCEntities()->sync([$b,$c]);

    }


    public function showCLinkStore(Request $request)
    {
        //
    }


    public function showCLinkShow($a)
    {
      foreach (TypeBEntity::find($a)->TypeCEntities as $var){
        echo $var->pivot->created_at."<br>";
      }

    }


    public function showCLinkEdit($id)
    {
        //
    }


    public function showCLinkUpdate($a, $b)
    {

    }


    public function showCLinkDestroy($a)
    {
      TypeBEntity::findOrFail($a)->TypeCEntities()->detach();

    }


    public function showCIndex()
    {
        //
    }


    public function showCCreate($a, $b, $c)
    {

    }


    public function showCStore(Request $request)
    {
        //
    }


    public function showCShow($a)
    {
      foreach (TypeBEntity::find($a)->TypeCEntities as $var){
        // echo $var->name."<br>";
        echo $var."<br>";
      }

      	// dd(TypeBEntity::find($a)->TypeCEntities);


    }


    public function showCEdit($id)
    {
        //
    }


    public function showCUpdate($a, $b, $c)
    {
			if(TypeBEntity::find($a)->has("TypeCEntities")){
				foreach(TypeBEntity::find($a)->TypeCEntities as $var){
					if($var->name == $b) {
						$var->name = $c;
						$var->save();
					}
				}
			}

    }


    public function showCDestroy($a, $b)
    {
			TypeBEntity::find($a)->TypeCEntities()->find($b)->delete();


    }
}
