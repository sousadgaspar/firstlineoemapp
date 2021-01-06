<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutedCommandHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executed_command_histories', function (Blueprint $table) {
            $table->id();
            $table->text('executed_command');
            $table->longtext('output')->nullable();
            $table->integer('user_id');
            $table->integer('server_id');
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
        Schema::dropIfExists('executed_command_histories');
    }
}
