<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogarticles', function (Blueprint $table) {
        	
            $table->increments('id');  // id INT AUTO_INCREMENT PRIMARY_KEY
            $table->string('title', 50); // VARCHAR 50
            $table->text('image')->nullable(); // TEXT
            $table->text('body'); // TEXT
            $table->dateTime('date'); // TEXT datetime
            //$table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogarticles');
    }
}
