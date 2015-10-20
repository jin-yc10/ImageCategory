<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageDataCategoryItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Create table for storing roles
        Schema::create('image_datasets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('image_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('image_dataset_id')->unsigned();
            $table->timestamps();
        });

        // Create table for storing permissions
        Schema::create('image_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url')->nullable();
            $table->integer('image_category_id')->unsigned();
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
        //
        Schema::drop('image_datasets');
        Schema::drop('image_categories');
        Schema::drop('image_objects');
    }
}
