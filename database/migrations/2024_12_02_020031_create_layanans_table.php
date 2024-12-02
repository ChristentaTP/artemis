<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansTable extends Migration
{
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan');
            $table->text('deskripsi');
            $table->text('detail_pengerjaan');
            $table->decimal('harga', 10, 2);
            $table->integer('durasi_pengerjaan'); // Dalam satuan hari
            $table->string('image')->nullable(); // Untuk menyimpan nama file gambar layanan
            $table->boolean('is_available')->default(true); // Status ketersediaan layanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('layanans');
    }
}
