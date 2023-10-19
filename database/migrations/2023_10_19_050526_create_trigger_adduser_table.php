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
        DB::unprepared('
            CREATE TRIGGER user_filter AFTER INSERT ON user FOR EACH ROW
            BEGIN
                DECLARE peran VARCHAR(20);
                SELECT roles INTO peran FROM user
                WHERE user.id_user = NEW.id_user;

                IF peran = "pelapor" THEN
                    INSERT INTO pelapor (id_identitas, nama, id_kategori, alamat, telephone, avatar, id_user, created_at, updated_at)
                    VALUES (NULL, NULL, NULL, NULL, NULL, NULL, NEW.id_user, NOW(), NULL);
                ELSEIF peran = "petugas" THEN
                    INSERT INTO petugas (nama, alamat, telephone, avatar, id_user, created_at, updated_at)
                    VALUES (NULL, NULL, NULL, NULL, NEW.id_user, NOW(), NULL);
                ELSEIF peran = "admin" THEN
                    INSERT INTO admin (nama, alamat, telephone, id_user, created_at, updated_at)
                    VALUES (NULL, NULL, NULL, NEW.id_user, NOW(), NULL);
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS user_filter');
    }
};
