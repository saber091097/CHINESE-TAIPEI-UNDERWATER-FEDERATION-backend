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
            $table->string('plus')->nullable();
            $table->string('subtotal')->nullable();
            $table->dropColumn('plus1');
            $table->dropColumn('plus2');
            $table->dropColumn('plus3');
            $table->dropColumn('plus4');
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
