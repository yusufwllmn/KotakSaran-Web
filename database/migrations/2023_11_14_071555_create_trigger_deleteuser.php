<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE TRIGGER user_delete BEFORE DELETE ON user FOR EACH ROW
            BEGIN
                DECLARE peran VARCHAR(20);
                SELECT role INTO peran FROM user WHERE user.id_user = OLD.id_user;

                IF peran = "pelapor" THEN
                    DELETE FROM pelapor WHERE id_user = OLD.id_user;
                ELSEIF peran = "admin" THEN
                    DELETE FROM admin WHERE id_user = OLD.id_user;
                ELSEIF peran = "petugas" THEN
                    DELETE FROM petugas WHERE id_user = OLD.id_user;
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS user_delete');
    }
};
