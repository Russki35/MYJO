<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalistSpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalist_spes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('j_id')->unsigned();
            $table->foreign('j_id')
                ->references('id')
                ->on('journalists')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('spe_id')->unsigned();
            $table->foreign('spe_id')
                ->references('id')
                ->on('specialities')
                ->onDelete('no action')
                ->onUpdate('no action');

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
        Schema::dropIfExists('journalist_spes');
    }
}

