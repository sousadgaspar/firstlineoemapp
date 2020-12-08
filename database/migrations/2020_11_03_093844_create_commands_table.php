<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->longText('command_sequence');
            $table->string('description')->nullable();
            $table->boolean('isReadOnly')->nullable();
            $table->boolean('isSuccessResultEmpty')->nullable();
            $table->longText('expectedResult')->nullable();
            $table->longText('wrongResults')->nullable();
            $table->longText('explanation')->nullable();
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
        Schema::dropIfExists('commands');
    }
}
