<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('id_number');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->date('dateofbirth');
            $table->enum('language', ['english']);
            $table->enum('interests', ['Laravel', 'vueJS', 'reactJS', 'Django']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
