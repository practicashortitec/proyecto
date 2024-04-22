<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Usuarios;

class CreateUrlsWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls_websites', function (Blueprint $table) {

            $table->string('url_web')->unique();
            $table->primary('url_web');

            $table->string('web_name');

            $table->unsignedBigInteger('added_by');
     
            $table->foreign('added_by')->references('id_usuario')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urls_websites');
    }
}
