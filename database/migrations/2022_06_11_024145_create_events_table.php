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
            $table->longText('event')->nullable();
            $table->integer('anno_type')->nullable();
            $table->longText('event_intr')->nullable();
            $table->longText('event_proc')->nullable();
            $table->longText('event_dire')->nullable();
            $table->longText('event_notice')->nullable();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
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
