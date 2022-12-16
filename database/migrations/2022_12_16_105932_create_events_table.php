<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('quantity_credits')->nullable();
            $table->string('furni')->nullable();
            $table->string('quantity_coins')->nullable();
            $table->string('badge')->nullable();
            $table->date('date');
            $table->string('time_from');
            $table->string('time_till');
            $table->text('description');
            $table->integer('user_id');
            $table->integer('updated_by');
            $table->integer('status');
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
        Schema::dropIfExists('events');
    }
};
