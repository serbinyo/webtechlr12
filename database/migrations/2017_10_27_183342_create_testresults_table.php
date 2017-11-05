<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testresults', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('fio');
            $table->string('groupname', 10);
            $table->string('answer1');
            $table->string('result1', 5);
            $table->integer('answer2');
            $table->string('result2', 5);
            $table->string('answer3', 20);
            $table->string('result3', 5);
            $table->string('mark',20);
            
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
        Schema::dropIfExists('testresults');
    }
}
