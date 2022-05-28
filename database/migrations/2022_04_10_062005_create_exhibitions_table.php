<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExhibitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('statement');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('location');
            $table->enum('type', ['solo', 'group']);
            $table->longText('description')->nullable();
            $table->string('installation_views')->nullable()->default('none.zip');
            $table->string('filepath')->nullable()->default('none.jpg');
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
        Schema::dropIfExists('exhibitions');
    }
}
