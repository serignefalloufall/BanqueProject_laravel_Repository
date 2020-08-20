<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('typeclients_id')->unsigned();
            $table->foreign('typeclients_id')->references('id')->on('typeclients');

            $table->integer('employeurs_id')->unsigned();
            $table->foreign('employeurs_id')->references('id')->on('employeurs');

            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('tel');
            $table->string('email');
            $table->string('profession');
            $table->decimal('salaire',6,2);
            $table->string('cni');
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
        Schema::dropIfExists('clients');
    }
}
