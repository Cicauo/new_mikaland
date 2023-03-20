<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_content', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('project_id');
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('image')->nullable();
            $table->text('content')->nullable();
            $table->text('type')->nullable();
            $table->text('icon')->nullable();
            $table->text('link')->nullable();
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
        Schema::dropIfExists('projects_content');
    }
}
