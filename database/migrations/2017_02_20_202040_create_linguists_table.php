<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinguistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linguists', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('j_id')->unsigned();
            $table->foreign('j_id')
                ->references('id')
                ->on('journalists')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('lea_id')->unsigned();
            $table->foreign('lea_id')
                ->references('id')
                ->on('languages')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('level');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linguists');
    }
}

