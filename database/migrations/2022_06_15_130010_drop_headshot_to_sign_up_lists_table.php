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
            $table->dropColumn('headshot');
            $table->dropColumn('id_card_img_front');
            $table->dropColumn('id_card_img_reverse');
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
