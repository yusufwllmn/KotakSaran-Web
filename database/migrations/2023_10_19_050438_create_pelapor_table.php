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
        Schema::create('pelapor', function (Blueprint $table) {
            $table->increments('id_pelapor');
            $table->string('id_identitas', 20)->nullable();
            $table->string('nama')->nullable();
            $table->unsignedInteger('id_kategori')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedInteger('id_user');
            $table->timestamps();

            $table->foreign("id_user")->references("id_user")->on("user")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_kategori")->references("id_kategori")->on("kategori")
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelapor');
    }
};
