<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class affect extends Model
{
    use HasFactory;

    protected $table = 'affect';

    protected $primaryKey = 'id_user, id_module';

    protected $fillable = [
        'id_user',
        'id_module',
    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(module::class, 'id_module');
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(teacher::class, 'id_user');
    }
}
