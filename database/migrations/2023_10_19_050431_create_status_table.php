<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id_status');
            $table->string('status');
        });

        DB::table('status')->insert([
            [
                'status'    => 'dalam antrian'
            ],
            [
                'status'    => 'diterima'
            ],
            [
                'status'    => 'ditolak'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
