<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('j_id')->unsigned();
            $table->foreign('j_id')
                ->references('id')
                ->on('journalists')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')
                ->references('id')
                ->on('hiring_medias')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->date('create_date');

            $table->decimal('global_score', 4, 2);

            $table->decimal('quality_score', 3, 1);

            $table->decimal('deadline-respect_score', 3, 1);

            $table->decimal('comm_score', 3, 1);

            $table->text('comment');

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
        Schema::dropIfExists('missions');
    }
}


