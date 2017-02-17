<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            $table->increments('id')->nullable();
            $table->string('name', 50);
            $table->string('slug', 60);
            $table->text('description');
            $table->boolean('status')->default(1);
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();

        });

        Schema::table('categories', function (Blueprint $table) {
            
            $table->foreign('parent_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}