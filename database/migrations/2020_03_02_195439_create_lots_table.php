<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->double('start_cost');
            $table->double('current_cost');
            $table->double('final_cost');
            $table->string('status');
            $table->integer('order_id');
            $table->integer('candidate_id');
            $table->timestamps();
            $table->timestamp('end_time_at')->nullable();

            $table->index('order_id');
            $table->index('candidate_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
