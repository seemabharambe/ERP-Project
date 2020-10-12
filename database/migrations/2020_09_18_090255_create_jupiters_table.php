<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJupitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jupiters', function (Blueprint $table) {
            $table->id();
             $table->integer('maintaskid');
            $table->string('maintask');
            $table->string('details');
            $table->date('createdon');
            $table->integer('deptid');
            $table->integer('empid');
            
            $table->integer('partyid');
            
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
        Schema::dropIfExists('jupiters');
    }
}
