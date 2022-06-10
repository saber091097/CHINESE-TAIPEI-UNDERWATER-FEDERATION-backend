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
        Schema::create('sign_up_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('event_id'); //活動 id
            $table->string('name');      //姓名
            $table->string('id_card');   //身分證
            $table->integer('gender');   //性別
            $table->string('phone');     //電話
            $table->string('email');     //電子信箱
            $table->string('addr');      //地址
            $table->string('line_id');   //line id
            $table->string('emer_name'); //緊急聯絡人
            $table->string('emer_phone');//緊急聯絡人電話
            $table->string('headshot');  //大頭照
            $table->string('id_card_img_front'); //身分證正面
            $table->string('id_card_img_reverse');//身分證反面
            $table->integer('plus1');    //加選 獨木舟
            $table->integer('plus2');    //加選 風浪板
            $table->integer('plus3');    //加選 SUP
            $table->integer('plus4');    //加選 無
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sign_up_lists');
    }
};
