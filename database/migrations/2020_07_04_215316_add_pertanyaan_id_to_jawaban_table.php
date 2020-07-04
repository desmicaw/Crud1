<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdToJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            $table->bigInteger('pertanyaan_id')->unsigned()->nullable();
            $table->foreign('pertanyaan_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jawaban', function (Blueprint $table) {
            
        });
    }
}
