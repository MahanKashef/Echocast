<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('menu_id')->nullable(false); // menus is choosen in informations table
            $table->string('PFP'); //picture file path
            $table->string('NOP'); //Name of Picture
            $table->string('AFP'); //audio file path
            $table->string('NOA'); //name of audio
            $table->longText('summary');
            $table->string('guest_id')->nullable(false);
            $table->bigInteger('view')->nullable(true);
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
        Schema::dropIfExists('podcasts');
    }
}
