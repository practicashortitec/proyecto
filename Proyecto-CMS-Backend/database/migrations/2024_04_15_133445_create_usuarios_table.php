<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {

            $table->bigIncrements('id_usuario');
           //  $table->primary('id_usuario');
            //$table->increments('id_usuario')->change();


        //    $table->id_usuario()->startingValue(100);

            $table->string('username');
            $table->string('email')->unique();
         //   $table->primary('email');

            $table->string('password');

            $table->string('token');    


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
