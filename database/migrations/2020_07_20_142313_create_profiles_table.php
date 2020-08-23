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
            $table->id();
            $table->boolean('gender')->nullable();
            $table->string('alternative_email')->nullable();
            $table->string('birth')->nullable();
            $table->longText('bio')->nullable();
            $table->unsignedBigInteger('user_id')->unique();


            
            /*
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();

            $table->unsignedBigInteger('user_id')->unique();

         
            $table->foreign('country_id')->references('id')
            ->on('countries');
            
            $table->foreign('state_id')->references('id')
            ->on('states');
 */

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
        Schema::dropIfExists('profiles');
    }
}
