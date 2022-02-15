<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->text('alamat_instansi');
            $table->string('web_instansi')->nullable();
            $table->string('nope_instansi')->nullable();
            $table->string('email_instansi')->nullable();
            $table->string('kategori_instansi');
            $table->string('logo_instansi')->nullable();
            $table->text('profile_instansi')->nullable();
            $table->text('visi_misi_instansi')->nullable();
            $table->text('dasar_hukum_instansi')->nullable();
            $table->text('daftar_layanan_instansi')->nullable();
            $table->text('persyaratan_layanan_instansi')->nullable();
            $table->string('biaya_layanan_instansi')->nullable();
            $table->string('alur_layanan_instansi')->nullable();
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
        Schema::dropIfExists('instansis');
    }
}
