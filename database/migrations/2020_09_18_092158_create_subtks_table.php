<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubtksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtks', function (Blueprint $table) {
            $table->id();
            $table->integer('subtaskid');
            $table->string('subtask');
            $table->string('details');
           
            $table->integer('maintaskid');
           $table->integer('deptid');
            $table->integer('empid');
            
            $table->date('startdate');
            
            $table->date('enddate');
            $table->string('status');
            $table->string('attachment');
            
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
        Schema::dropIfExists('subtks');
    }
}
