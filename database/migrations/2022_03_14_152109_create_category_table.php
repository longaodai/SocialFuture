<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('icon')->nullable();
            $table->string('tag')->nullable();
            $table->string('description')->nullable();
            $table->string('active')->default(ACTIVE_SHOW);
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
        Schema::dropIfExists('categories');
    }
}
