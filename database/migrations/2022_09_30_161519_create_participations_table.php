<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->id()->autoIncrement();
         

            $table->unsignedBigInteger('participant')->nullable();
            $table->foreign('participant')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('event')->nullable();
            $table->foreign('event')->references('id')->on('events')->onDelete('cascade');
            $table->timestamp('creationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participations');
    }
};
