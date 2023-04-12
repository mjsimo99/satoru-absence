<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\seances;

class student extends Model
{

    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'cne',
        'nom_etu',
        'prenom_etu',
        'dateN_etu',
        'villeN_etu',
        'ville_etu',
        'adresse_etu',
        'photo_etu',
        'email_etu',
        'phone_etu',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function seances()
    {
        return $this->hasMany(seances::class, 'user_id');
    }
    public function absences()
    {
        return $this->hasMany(absences::class, 'user_id');
    }


     



}
