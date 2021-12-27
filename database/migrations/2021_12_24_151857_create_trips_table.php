<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
                        $table->id();
            $table->string("name");
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('days')->nullable();
            $table->text('minimum_age')->nullable();
            $table->unsignedInteger('max_visitors')->nullable();
            $table->unsignedDouble('price')->nullable();
            $table->dateTime('date')->nullable();
            $table->unsignedBigInteger("guide_id");
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign("guide_id")
                ->references("id")
                ->on("users")
                ->onDelete('cascade');
            $table->foreign("category_id")
                  ->references('id')
                  ->on("categories")
                  ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
