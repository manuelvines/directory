<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->string('experience_thumbnail')->nullable();
            $table->string('initial_schedule');
            $table->string('final_schedule');
            
            $table->integer('max_people');

            $table->longText('description');


            $table->longText('restrictions')->nullable();

            $table->longText('tips')->nullable();

            $table->longText("extra_expenses")->nullable();

            $table->decimal("price")->nullable();
            $table->decimal("estimated_price_per_person")->nullable();

            
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();

  
        
         
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
        Schema::dropIfExists('experiences');
    }
}
