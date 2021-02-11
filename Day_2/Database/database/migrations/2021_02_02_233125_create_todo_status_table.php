<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_status', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->time('time');
            $table->bigInteger('list_id')->unsigned()->index();
            $table->foreign('list_id')->references('id')->on('todo_list');
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
        Schema::dropIfExists('todo_status');
    }
}
