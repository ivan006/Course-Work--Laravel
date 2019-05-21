<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeBEntityTypeCEntityMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_b_entity_type_c_entity', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('type_b_entity_id');
            $table->integer('type_c_entity_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_b_entity_type_c_entity');
    }
}
