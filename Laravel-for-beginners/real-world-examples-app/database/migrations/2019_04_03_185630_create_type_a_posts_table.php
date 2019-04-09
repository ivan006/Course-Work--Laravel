<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_a_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('data_field_a');
            $table->string('data_field_b');
            $table->string('data_field_c');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_a_posts');
    }
}
