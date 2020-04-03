<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMSCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_m_s_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('server_name');
            $table->string('memory_status');
            $table->string('partitions_status');
            $table->string('occ_connections_status');
            $table->string('msc_connections_status');
            $table->string('updays');
            $table->string('mci_status');
            $table->string('sci_status');
            $table->string('bci_status');
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
        Schema::dropIfExists('s_m_s_c_s');
    }
}
