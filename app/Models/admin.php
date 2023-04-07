<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'nom_admin',
        'prenom_admin',
        'email_admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
