<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalAccessToken extends Model
{
    use HasFactory;
    protected $table = 'personal_access_tokens';
    protected $primaryKey   = "id";
    protected $fillable = [
        'tokenable_type',
        'tokenable_id',
        'name',
        'token',
        'abilities',
        'last_used_at',
    ];

    protected $casts = [
        'abilities' => 'json',
        'last_used_at' => 'datetime',
    ];

    public function tokenable(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'tokenable_id');
    }
}
