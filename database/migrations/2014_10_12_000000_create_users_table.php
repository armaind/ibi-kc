<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('telp_rumah')->nullable();
            $table->string('alamatrumah')->nullable();
            $table->string('provinsir')->nullable();
            $table->string('kotar')->nullable();
            $table->string('kecamatanr')->nullable();
            $table->string('kodeposr')->nullable();
            $table->string('telp_praktik')->nullable();
            $table->string('alamatpraktik')->nullable();
            $table->string('provinsip')->nullable();
            $table->string('kotap')->nullable();
            $table->string('kecamatanp')->nullable();
            $table->string('kodeposp')->nullable();
            $table->string('jampraktik')->nullable();
            $table->string('haripraktik')->nullable();
            $table->string('tenagakesehatanlain')->nullable();
            $table->string('tenaganonkesehatan')->nullable();
            $table->string('bangunan')->nullable();
            $table->string('ruangtunggu')->nullable();
            $table->string('ruangperiksa')->nullable();
            $table->string('ruangbersalin')->nullable();
            $table->string('ruangnifas')->nullable();
            $table->string('wc')->nullable();
            $table->string('ruanglain')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
