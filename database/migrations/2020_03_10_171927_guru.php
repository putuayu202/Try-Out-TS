<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Guru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gutu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip')
            $table->string('password');
            $table->string('nama');
            $table->boolean('active')->default(false);
            $table->string('jumlah_soal');
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
        //
    }
}
