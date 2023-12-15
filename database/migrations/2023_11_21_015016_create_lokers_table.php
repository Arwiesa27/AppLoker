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
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('nohp',13);
            $table->string('namaP',20);
            $table->string('posisi',20);
            $table->string('persyaratan');
            $table->string('tglbuka',20);
            $table->string('tgltutup',20);
            $table->text('fotolowongan');
            $table->enum('status',['Proses','Ditolak','Disetujui'])->default('Proses');
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
        Schema::dropIfExists('lokers');
    }
};
