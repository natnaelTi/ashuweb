<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('exhibition_id')->nullable()->default(1);
            $table->string('title');
            $table->year('year');
            $table->integer('ar_width');
            $table->integer('ar_height');
            $table->string('camera');
            $table->integer('iso')->nullable()->default(0);
            $table->integer('sh_speed')->nullable()->default(0);
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
        Schema::dropIfExists('photographies');
    }
}
