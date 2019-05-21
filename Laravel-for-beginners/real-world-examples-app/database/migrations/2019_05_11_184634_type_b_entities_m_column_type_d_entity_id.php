<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TypeBEntitiesMColumnTypeDEntityId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_b_entities', function (Blueprint $table) {
            $table->integer('type_d_entity_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_b_entities', function (Blueprint $table) {
            $table->dropColumn('type_d_entity_id');
        });
    }
}
