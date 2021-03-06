<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('initial_schedule');
            $table->time('duration');
            $table->integer('people');
            $table->double('amount_by_person');
            $table->double('total')->nullable();
            $table->integer('status');

            $table->unsignedBigInteger('visitor_id');
            $table->unsignedBigInteger('guide_id');


            $table->unsignedBigInteger('experience_id');

     

            $table->foreign('experience_id')->references('id')
            ->on('experiences')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            
            $table->foreign('visitor_id')->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

                   
            $table->foreign('guide_id')->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');


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
        Schema::dropIfExists('appointments');
    }
}
