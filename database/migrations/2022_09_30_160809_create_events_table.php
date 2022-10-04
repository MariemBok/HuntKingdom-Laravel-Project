<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table
                ->string('name', 25)
                ->nullable()
                ->default('');

            $table
                ->text('description')
                ->nullable()
                ->default('');
            $table->date('startDate')->nullable();
            $table
                ->time('time');
              
            $table
                ->integer('nbrMax')
                ->nullable()
                ->default(0);
            $table->string('location', 25);
            $table->string('picture')->default('default.jpeg');

            $table->unsignedBigInteger('organizer')->nullable();
            $table
                ->foreign('organizer')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table
                ->timestamp('creationDate')
                ->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
