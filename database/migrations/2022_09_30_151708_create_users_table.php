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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table
                ->string('firstName', 25)
                ->nullable()
                ->default('');
            $table
                ->string('lastName', 25)
                ->nullable()
                ->default('');
            $table
                ->string('phone', 20)
                ->nullable()
                ->default('');
            $table->enum('role', [1, 2])->default(1);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('address', 255);
            $table->string('picture')->default('default.jpeg');
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
        Schema::dropIfExists('users');
    }
};
