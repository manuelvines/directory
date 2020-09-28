<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenced_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('reference_code_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_code_used')->default(0);

    
            $table->foreign('reference_code_id')->references('id')
            ->on('reference_codes');
        
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
        Schema::dropIfExists('referenced_users');
    }
}
