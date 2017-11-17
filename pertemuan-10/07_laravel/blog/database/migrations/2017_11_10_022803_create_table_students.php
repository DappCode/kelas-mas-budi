<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  // --> Untuk Membuat Tabel
    {
        Schema::create('students', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama');    // -> Varchar
            $table->string('address');  // -> Varchars
            $table->integer('age');     // -> Integer
            $table->string('email')->unique();  //-> Jika dia unik 
            $table->string('photo')->nullable();
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
        Schema::drop('students');
    }
}
