<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign('movies_director_id_foreign');

            $table->foreign('director_id')->on('directors')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');

        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign('movies_director_id_foreign');

            $table->foreign('director_id')->on('users')->references('id');
        });
    }
}
