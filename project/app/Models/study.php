<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    use HasFactory;
    protected $table = 'study';
    protected $fillable = [
        'user_id',
        'module_id',

    ];
}
