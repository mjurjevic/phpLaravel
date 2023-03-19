<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ucionicas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv',40);

        });

        Schema::create('termins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nastavnik',40);
            $table->string('predmet',40);
            $table->unsignedBigInteger('ucionica_id');
            $table->integer('trajanje');
            $table->dateTime('termin');
            $table->integer('status');
            $table->foreign('ucionica_id')->references('id')->on('ucionicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termins');
        Schema::dropIfExists('ucionicas');
    }
};