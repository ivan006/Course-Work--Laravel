<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeAEntitiesMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_a_entities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('data_field_a');
            $table->string('data_field_b');
            $table->string('data_field_c');
            $table->integer('type_b_entity_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_a_entities');
    }
}
