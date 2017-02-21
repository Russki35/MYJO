<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Journalists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up()
    {
        Schema::create('journalists', function (Blueprint $table) {

            $table->increments('id');

            $table->string('firstname');

            $table->string('lastname');

            $table->string('email');

            $table->string('password');

            $table->string('profile_title');

            $table->string('location');

            $table->string('picture');

            $table->boolean('validate_mail');

            $table->integer('seniority');

            $table->decimal('price', 7, 2);

            $table->boolean('available');

            $table->boolean('part-time');

            $table->text('description');

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
        Schema::dropIfExists('journalists');
    }
}
