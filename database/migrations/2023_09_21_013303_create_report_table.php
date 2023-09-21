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
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id_report');
            $table->longText('report_content');
            $table->date('report_date');
            $table->string('status', 30);
            $table->string('document');
            $table->unsignedInteger('id_reporter');
            $table->unsignedInteger('id_officer')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("id_reporter")->references("id_user")->on("user")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_officer")->references("id_user")->on("user")
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report');
    }
};
