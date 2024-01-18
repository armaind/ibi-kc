<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('nomerregistrasi')->unique();
            $table->string('nomerdokumen')->unique();
            $table->string('nomerrevisi');
            $table->string('tanggalterbit');
            $table->string('halaman');
            $table->string('keg1')->nullable();
            $table->string('keg2')->nullable();
            $table->string('keg3')->nullable();
            $table->string('keg4')->nullable();
            $table->string('keg5')->nullable();
            $table->string('keg6')->nullable();
            $table->string('keg7')->nullable();
            $table->string('keg8')->nullable();
            $table->string('keg9')->nullable();
            $table->string('keg10')->nullable();
            $table->string('keg11')->nullable();
            $table->string('keg12')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('monitorings');
    }
}
