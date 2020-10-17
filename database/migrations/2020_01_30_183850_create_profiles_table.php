<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sexe');
            $table->string('Tel');
            $table->date('dateNaiss');
            $table->string('situationMat');
            $table->string('profession');
            $table->date('datePermis');
            $table->string('numPermis');
            $table->string('AntecedentAssur');
            $table->string('InfractionsPermis'); 
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
        Schema::dropIfExists('profiles');
    }
}
