<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\DetailVaksin::class)->constrained()->onDelete('cascade');
            $table->date('tanggal');
            $table->string('dokumen')->nullable();
            $table->string('dari');
            $table->integer('penerimaan');
            $table->string('petugas')->nullable();
            $table->string('penerima')->nullable();
            $table->string('hp')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
}
