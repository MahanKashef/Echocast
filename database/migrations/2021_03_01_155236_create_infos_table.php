<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('bchome'); // background image of home
            $table->string('logo');
            $table->longText('about'); // description in about us page
            $table->BigInteger('number1')->nullable(true);
            $table->BigInteger('number2')->nullable(true);
            $table->string('address');  // university of birjand
            $table->string('gmail')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('twitter')->nullable(true);
            $table->string('insta')->nullable(true);
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
        Schema::dropIfExists('informations');
    }
}
