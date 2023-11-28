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
        Schema::create('bagian', function (Blueprint $table) {
            $table->increments('id_bagian');
            $table->string('bagian');
        });

        DB::table('bagian')->insert([
            ['bagian'    => 'RPL'],
            ['bagian'    => 'SIJA'],
            ['bagian'    => 'PSPT'],
            ['bagian'    => 'TEI'],
            ['bagian'    => 'TEK'],
            ['bagian'    => 'TOI'],
            ['bagian'    => 'TPTU'],
            ['bagian'    => 'IOP'],
            ['bagian'    => 'MEKA'],
            ['bagian'    => 'OSIS MPK'],
            ['bagian'    => 'Sarana Prasarana'],
            ['bagian'    => 'Kurikulum'],
            ['bagian'    => 'Hubin'],
            ['bagian'    => 'Kesiswaan'],
            ['bagian'    => 'Tata Usaha'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bagian');
    }
};
