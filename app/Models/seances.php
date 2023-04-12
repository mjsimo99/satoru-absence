<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\module;




class seances extends Model
{
    use HasFactory;

    protected $table = 'seances';
    protected $primaryKey = 'id';
    protected $fillable = [
        'module_id',
        'user_id',
        'date_seance',
        'heure_debut',
        'heure_fin',
        'type_seance',
    ];

    public function module()
    {
        return $this->belongsTo(module::class, 'module_id');
    }
    public function student()
    {
        return $this->belongsTo(student::class, 'user_id');
    }
    public function absence()
    {
        return $this->hasMany(absence::class, 'seance_id');
    }


    
}
