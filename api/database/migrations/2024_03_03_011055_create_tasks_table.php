<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('creator');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('addressee');
            $table->foreign('addressee')->references('id')->on('users')->onDelete('cascade');
            $table->string('content');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
