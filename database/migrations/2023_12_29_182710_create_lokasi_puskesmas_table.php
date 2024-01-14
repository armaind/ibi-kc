<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiPuskesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_puskesmas', function (Blueprint $table) {
            $table->id();
            $table->string('puskesmas');
            $table->string('kodepuskesmas');
            $table->string('alamatpuskesmas');
            $table->string('jenispuskesmas');
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
        Schema::dropIfExists('lokasi_puskesmas');
    }
}
