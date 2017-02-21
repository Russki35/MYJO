<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommandationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommandations', function (Blueprint $table) {

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
        Schema::dropIfExists('recommandations');
    }
}

