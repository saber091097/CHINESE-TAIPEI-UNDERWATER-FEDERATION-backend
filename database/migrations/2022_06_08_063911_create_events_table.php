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
            $table->timestamps();
            $table->integer('event_type')->nullable();
            $table->string('event')->nullable();
            $table->integer('anno_type')->nullable();
            $table->string('event_intr')->nullable();
            $table->string('event_proc')->nullable();
            $table->string('event_dire')->nullable();
            $table->string('event_notice')->nullable();
            $table->string('name')->nullable();
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
