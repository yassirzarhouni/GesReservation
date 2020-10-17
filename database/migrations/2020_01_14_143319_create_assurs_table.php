<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('new')->nullable();
            $table->date('datePrem')->nullable();
            $table->boolean('assurnow')->nullable();
            $table->date('dateAcqui');
            $table->date('dateAssur');
            $table->string('madeAchat');
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
        Schema::dropIfExists('assurs');
    }
}
