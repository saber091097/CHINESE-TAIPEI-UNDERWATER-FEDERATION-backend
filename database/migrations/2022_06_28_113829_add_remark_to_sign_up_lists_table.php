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
        Schema::table('sign_up_lists', function (Blueprint $table) {
            //
            $table->string('fivenumber')->nullable();
            $table->string('remitstate')->nullable();
            $table->string('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sign_up_lists', function (Blueprint $table) {
            //
        });
    }
};
