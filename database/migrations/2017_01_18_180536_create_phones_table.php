<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 50);
            $table->string('code_country', 8);
            $table->integer('ddd');
            $table->integer('prefix');
            $table->integer('sufix');

            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->
                    references('id')->
                    on('peoples')->
                    onDelete('cascade');

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
        Schema::dropIfExists('phones');
    }
}
