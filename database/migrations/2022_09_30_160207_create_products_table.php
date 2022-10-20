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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',25);
            $table->float('price');
            $table->integer('reference');
            $table->float('quantity')->default(10);
            $table->longText('description');
            /*$table->unsignedBigInteger('user')->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');*/
            $table->string('picture') -> nullable();
            $table->timestamp('creationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('category_products')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
