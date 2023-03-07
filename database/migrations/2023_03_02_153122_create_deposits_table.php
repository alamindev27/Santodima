<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('deposit_type', array('TRC', 'TRC20', 'ERC20'));
            $table->float('amount');
            $table->string('tId_tHash')->nullable();
            $table->string('t_certificate')->nullable();
            $table->enum('status', array('pending', 'approved', 'rejected'))->default('pending');
            $table->enum('deleted_status', array('0', '1'))->default('1')->comment('0=trash/1=restore');
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
        Schema::dropIfExists('deposits');
    }
}
