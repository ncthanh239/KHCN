<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ma')->nullable();
            $table->string('tendt')->nullable();
            $table->string('muctieu')->nullable();
            $table->string('ketqua')->nullable();
            $table->string('donvith')->nullable();
            $table->string('capth')->nullable();
            $table->string('trangthai')->nullable();
            $table->string('chunhiem')->nullable();
            $table->string('loaidt')->nullable();
            $table->string('linhvuc')->nullable();
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
        Schema::dropIfExists('detais');
    }
}
