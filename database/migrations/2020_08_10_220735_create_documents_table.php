<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('folio')->unique();
          
            $table->string('front_doc')->nullable();
            $table->string('back_doc')->nullable();
            
            $table->smallInteger('type');

            $table->string('other')->nullable();

            $table->unsignedBigInteger('user_id')->unique();


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
        Schema::dropIfExists('documents');
    }
}
