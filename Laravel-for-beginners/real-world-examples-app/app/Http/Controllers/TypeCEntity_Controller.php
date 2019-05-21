<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TypeCEntity;

class TypeCEntity_Controller extends Controller
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
    public function create($a)
    {
      TypeCEntity::create([
        'name'=>$a,
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
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    public function destroy($a)
    {
        TypeCEntity::destroy($a);
    }





    public function showBIndex()
    {
        //
    }




    public function showBCreate($a)
    {


    }


    public function showBStore(Request $request)
    {
        //
    }



    public function showBShow($a)
    {
			foreach (TypeCEntity::find($a)->TypeBEntities as $var){
				echo $var->data_field_a."<br>";
			}
    }



    public function showBEdit($id)
    {
        //
    }



    public function showBUpdate(Request $request, $id)
    {
        //
    }



    public function showBDestroy($a)
    {

    }
}
