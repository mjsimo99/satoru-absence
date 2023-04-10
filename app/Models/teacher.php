<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'nom_ens',
        'prenom_ens',
        'adress_ens',
        'ville_ens',
        'photo_ens',
        'email_ens',
        'phone_ens',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    
}
