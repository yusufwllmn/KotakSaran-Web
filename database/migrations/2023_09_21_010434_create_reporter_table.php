<?php

use Brick\Math\BigInteger;
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
        Schema::create('reporter', function (Blueprint $table) {
            $table->increments('id_reporter');
            $table->string('id_identity', 20);
            $table->string('name');
            $table->string('category');
            $table->text('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->unsignedInteger('id_user');
            $table->timestamps();

            $table->foreign("id_user")->references("id_user")->on("user")
            ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporter');
    }
};
