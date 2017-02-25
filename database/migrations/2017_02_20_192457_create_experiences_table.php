<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');

            $table->string('role');

            $table->date('start_date');

            $table->date('end_date');

            $table->string('place');

            $table->text('resume');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')//j_id a été modifié manuellement et remplacé par user_id
                ->references('id')
                ->on('journalists')
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
        Schema::dropIfExists('experiences');
    }
}

