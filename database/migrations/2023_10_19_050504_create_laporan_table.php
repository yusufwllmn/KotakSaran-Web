<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->unsignedInteger('subjek_laporan');
            $table->longText('isi_laporan');
            $table->date('tanggal_lapor');
            $table->unsignedInteger('id_status');
            $table->string('dokumen')->nullable();
            $table->unsignedInteger('id_pelapor');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("id_pelapor")->references("id_user")->on("user")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_status")->references("id_status")->on("status")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("subjek_laporan")->references("id_bagian")->on("bagian")
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
