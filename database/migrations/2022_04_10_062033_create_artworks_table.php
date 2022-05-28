<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exhibition_id')->nullable()->default(1);
            $table->string('title');
            $table->string('width');
            $table->string('height');
            $table->enum('type', ['painting', 'drawing']);
            $table->string('medium');
            $table->string('year');
            $table->float('price');
            $table->string('description');
            $table->string('filepath');
            $table->timestamps();

            $table->foreign('exhibition_id')->references('id')->on('exhibitions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
}
