<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCoverContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_cover_content', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('users_cover_id')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('content')->nullable();
            $table->text('link')->nullable();
            $table->integer('sorter')->nullable();
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
        Schema::dropIfExists('users_cover_content');
    }
}
