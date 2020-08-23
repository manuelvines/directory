<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();


            
            $table->unsignedBigInteger('user_id')->unique();

            
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();

            
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

        
         
            $table->foreign('country_id')->references('id')
            ->on('countries');
            
            $table->foreign('state_id')->references('id')
            ->on('states');

            $table->foreign('user_id')->references('id')
            ->on('users');
        


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
        Schema::dropIfExists('locations');
    }
}
