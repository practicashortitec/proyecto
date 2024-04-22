<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_test', function (Blueprint $table) {
            $table->string('url_web')->unique();

            $table->primary('url_web');

            $table->foreign('url_web')->references('url_web')->on('urls_websites');


            $table->string('test_1');
            $table->string('test_2');
            $table->string('test_3');
            $table->string('test_4');
            $table->string('test_5');
            $table->string('test_6');
            $table->string('test_7');
            $table->string('test_8');
            $table->string('test_9');
            $table->string('test_10');
            $table->string('test_11');
            $table->string('test_12');
            $table->string('test_13');
            $table->string('test_14');
            
            $table->string('result_CMS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_test');
    }
}
